from selenium import webdriver
from selenium.webdriver.common.by import By
import time
from datetime import datetime

login_url = 'http://localhost/penjualan-tiket-hotel/view/register/'
username = 'fulan'
email = 'fulan@gmail.com'
address = 'batu aji'
phone_number = '0812345678910'
password = '123'
rePassword = '123'

driver = webdriver.Firefox()

driver.get(login_url)

username_field = driver.find_element(By.XPATH, '//input[@name="username"]')
email_field = driver.find_element(By.XPATH, '//input[@name="email"]')
address_field = driver.find_element(By.XPATH, '//input[@name="address"]')
phone_number_field = driver.find_element(By.XPATH, '//input[@name="phone_number"]')
password_field = driver.find_element(By.XPATH, '//input[@name="password"]')
repassword_field = driver.find_element(By.XPATH, '//input[@name="rePassword"]')
login_button = driver.find_element(By.XPATH, '//button[@name="submit"]')

username_field.send_keys(username)
time.sleep(5)
email_field.send_keys(email)
time.sleep(5)
address_field.send_keys(address)
time.sleep(5)
phone_number_field.send_keys(phone_number)
time.sleep(5)
password_field.send_keys(password)
time.sleep(5)
repassword_field.send_keys(rePassword)
time.sleep(5)
login_button.click()
time.sleep(5)

current_url = driver.current_url