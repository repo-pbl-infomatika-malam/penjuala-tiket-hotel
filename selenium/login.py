from selenium import webdriver
from selenium.webdriver.common.by import By
import time
from datetime import datetime

login_url = 'http://localhost/penjualan-tiket-hotel/view/login/'
email = 'fulan@gmail.com'
password = '123'

driver = webdriver.Firefox()

driver.get(login_url)

email_field = driver.find_element(By.XPATH, '//input[@name="email"]')
password_field = driver.find_element(By.XPATH, '//input[@name="password"]')
login_button = driver.find_element(By.XPATH, '//button[@name="submit"]')

email_field.send_keys(email)
time.sleep(1)
password_field.send_keys(password)
time.sleep(1)
login_button.click()

time.sleep(2)

current_url = driver.current_url

# if '/dashboard' in current_url:
#     status = "Successful"
# elif '/' in current_url:
#     status = "Login gagal"
# else:
#     status = "Failed (Unknown error)"

# current_datetime = datetime.now().strftime("%Y-%m-%d %H:%M:%S")

# with open('selenium/data-mahasiswa/hasil-testing.txt', 'a') as file:
#     if '<h1>Internal Server Error</h1>' in driver.page_source:
#         file.write(f" {current_datetime} - Fitur Login  - Status: Error - Internal Server Error\n")
#     else:
#         file.write(f" {current_datetime} - Fitur Login - Status: {status}\n")

driver.quit()