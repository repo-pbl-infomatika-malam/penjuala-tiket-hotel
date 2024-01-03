from selenium import webdriver
from selenium.webdriver.common.by import By
import time
from datetime import datetime

driver = webdriver.Firefox()
driver.get("http://localhost/penjualan-tiket-hotel/view/landing-page/")
time.sleep(5)

about_link = driver.find_element(By.XPATH, "//a[@href='../detail-product-page/index.php?id_room=14']")
about_link.click()
time.sleep(5)

about_link = driver.find_element(By.XPATH, "//a[@href='../checkout-page/index.php?id_room=']")
about_link.click()
time.sleep(5)

about_link = driver.find_element(By.XPATH, "//a[@href='../checkout-page/index.php?id_room=']")
about_link.click()
time.sleep(5)

book_button = driver.find_element(By.XPATH, '//button[@type="submit"]')

book_button.click()
time.sleep(5)

about_link = driver.find_element(By.XPATH, "//a[@href='../detail-invoice/index.php?id_booking=']")
about_link.click()
time.sleep(5)

driver.quit()