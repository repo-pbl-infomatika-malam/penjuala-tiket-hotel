from selenium import webdriver
from selenium.webdriver.common.by import By
import time
from datetime import datetime

driver = webdriver.Firefox()
driver.get("http://localhost/penjualan-tiket-hotel/view/landing-page/")
time.sleep(5)

about_link = driver.find_element(By.XPATH, "//a[@href='../catalog-product-page/']")
about_link.click()
time.sleep(5)

driver.quit()