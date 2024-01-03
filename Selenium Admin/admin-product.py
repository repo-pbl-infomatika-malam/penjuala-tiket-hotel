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
    time.sleep(2)

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

    WebDriverWait(driver, 10).until(
        EC.presence_of_element_located((By.XPATH, '//div[contains(text(), "Welcome")]'))
    )

    # BAGIAN DASHBOARD ADMIN KOK GA BISA COKKKKKKKKKKKKKKKKKKKKKK 
    time.sleep(2)

    tambah_produk_button = driver.find_element(By.XPATH, '//button[@type=button"]')
    tambah_produk_button.click()
    time.sleep(2)

except TimeoutException as e:
    print("Timeout exception:", str(e))

finally:
    driver.quit()
