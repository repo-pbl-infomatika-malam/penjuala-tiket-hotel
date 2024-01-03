from selenium import webdriver
from selenium.webdriver.common.by import By
import time
from datetime import datetime

driver = webdriver.Firefox()

login_url = 'http://localhost/penjualan-tiket-hotel/view/login/index.php'
# email = 'test@test.co'
# password = '123'
email = 'fulan@gmail.com'
password = '123'

driver = webdriver.Firefox()

driver.get(login_url)

email_field = driver.find_element(By.XPATH, '//input[@name="email"]')
password_field = driver.find_element(By.XPATH, '//input[@name="password"]')
login_button = driver.find_element(By.XPATH, '//button[@name="submit"]')

email_field.send_keys(email)
time.sleep(2)
password_field.send_keys(password)
time.sleep(2)
login_button.click()

time.sleep(4)

about_link = driver.find_element(By.ID, "lihat_rincian=1")

about_link.click()
time.sleep(4)

about_link = driver.find_element(By.ID, "book_button")
about_link.click()
time.sleep(4)

book_button = driver.find_element(By.ID, 'checkout_button')
book_button.click()
time.sleep(4)

about_link = driver.find_element(By.ID, "button_check_detail_invoice=1")
about_link.click()
time.sleep(4)

driver.quit()