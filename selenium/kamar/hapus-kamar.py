from selenium import webdriver
from selenium.webdriver.common.by import By
import datetime
import time

driver = webdriver.Firefox()

email = 'admin@admin'
password = 'admin'

driver.get("http://localhost/penjualan-tiket-hotel/view/login/index.php")

email_field = driver.find_element(By.XPATH, '//input[@name="email"]')
password_field = driver.find_element(By.XPATH, '//input[@name="password"]')
login_button = driver.find_element(By.XPATH, '//button[@name="submit"]')

email_field.send_keys(email)
time.sleep(3)
password_field.send_keys(password)
time.sleep(3)
login_button.click()
time.sleep(3)
  
button_hapus = driver.find_element(By.ID, 'hapus=1')
button_hapus.click()

time.sleep(5)
  
driver.quit()