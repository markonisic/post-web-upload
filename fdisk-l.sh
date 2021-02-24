#!/bin/bash

sudo fdisk -l >> fdisk-l.txt
sudo curl -i -X POST -H "Content-Type: multipart/form-data"  -F ""fileupload"=@/home/srvadmin/fdisk-l.txt" http://localhost/upload/upload.php
