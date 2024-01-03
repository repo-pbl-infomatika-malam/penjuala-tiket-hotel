from selenium import webdriver
from selenium.webdriver.common.by import By
import time

driver = webdriver.Firefox()
driver.get("http://localhost/penjualan-tiket-hotel/view/landing-page/index.php")
time.sleep(5)

about_link = driver.find_element(By.LINK_TEXT, "About")
about_link.click()
time.sleep(5)

driver.quit()