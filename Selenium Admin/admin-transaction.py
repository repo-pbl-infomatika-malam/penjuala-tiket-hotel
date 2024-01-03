from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
from selenium.common.exceptions import TimeoutException
from datetime import datetime
import time

landing_page_url = 'http://localhost/penjualan-tiket-hotel/view/landing-page/index.php'
email = 'admin@admin'
password = 'admin'

driver = webdriver.Chrome()

try:
    # LANDING PAGE
    driver.get(landing_page_url)
    time.sleep(3)

    masuk_button = WebDriverWait(driver, 10).until(
        EC.element_to_be_clickable((By.XPATH, '//button[contains(text(), "Masuk")]'))
    )
    masuk_button.click()

    email_field = WebDriverWait(driver, 10).until(
        EC.visibility_of_element_located((By.NAME, 'email'))
    )
    password_field = driver.find_element(By.NAME, 'password')
    time.sleep(2)

    # LOGIN
    email_field.send_keys(email)
    time.sleep(2)
    password_field.send_keys(password)
    time.sleep(2)

    email_field.submit()

    time.sleep(2)

    # TRANSAKSI
    transaksi_button = WebDriverWait(driver, 10).until(
        EC.element_to_be_clickable((By.XPATH, '//a[@href="transaksi.php"]/button'))
    )
    transaksi_button.click()
    time.sleep(3)  
    
    
    current_url = driver.current_url

    if '/dashboard' in current_url:
        status = "Successful"
    elif '/' in current_url:
        status = "Login gagal"
    else:
        status = "Failed (Unknown error)"

    current_datetime = datetime.now().strftime("%Y-%m-%d %H:%M:%S")

    with open('uji-fungsionalitas.txt', 'a') as file:
        if '<h1>Internal Server Error</h1>' in driver.page_source:
            file.write(f"Fitur Login - Diuji pada: {current_datetime} - Status: Error - Internal Server Error\n")
        else:
            file.write(f"Fitur Login - Diuji pada: {current_datetime} - Status: {status}\n")

except TimeoutException as e:
    print("Timeout exception:", str(e))

finally:
    driver.quit()
