from selenium import webdriver
from selenium.webdriver.common.by import By
import datetime
import time
from selenium.webdriver.support.ui import Select

driver = webdriver.Firefox()

email = 'admin@admin'
password = 'admin'

nomer_kamar = '4455'
nama_kamar = 'kamar terbaru'
deskripsi = 'ini kamar bagus punya loh'
foto = '123'
tipe_kamar = '123'
harga = '123'

driver.get("http://localhost/penjualan-tiket-hotel/view/kamar/index.php")


email_field = driver.find_element(By.XPATH, '//input[@name="email"]')
password_field = driver.find_element(By.XPATH, '//input[@name="password"]')
login_button = driver.find_element(By.XPATH, '//button[@name="submit"]')

email_field.send_keys(email)
time.sleep(3)
password_field.send_keys(password)
time.sleep(3)
login_button.click()

time.sleep(5)

# data-bs-target="#modaltambah"
driver.find_element(By.XPATH, '//button[@data-bs-target="#modaltambah"]').click()


input_nomer_kamar = driver.find_element(By.ID, "tambah_nomer_kamar")
input_nomer_kamar.send_keys(nomer_kamar)

time.sleep(3)

input_nama_kamar = driver.find_element(By.ID, "tambah_nama_kamar")
input_nama_kamar.send_keys(nama_kamar)

time.sleep(3)

input_deskripsi = driver.find_element(By.ID, "tambah_deskripsi_kamar")
input_deskripsi.send_keys(deskripsi)

time.sleep(3)


# time.sleep(3)

input_nomer_kamar = driver.find_element(By.ID, "tambah_type_kamar")
input_nomer_kamar.click()

time.sleep(3)

select = Select(driver.find_element(By.ID, 'tambah_type_kamar'))
select.select_by_value('standar')
# input_nomer_kamar.click()

time.sleep(3)

input_harga = driver.find_element(By.ID, "tambah_harga_kamar")
input_harga.send_keys(harga)

time.sleep(3)

tombol_tambah = driver.find_element(By.ID, "button_tambah")

tombol_tambah.click()
time.sleep(3)
  
driver.quit()