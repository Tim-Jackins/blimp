#!/usr/bin/python

import Adafruit_BMP.BMP085 as BMP085
import time
#import RPi.GPIO as GPIO

sensor = BMP085.BMP085()

#GPIO.setmode(GPIO.BCM)
#GPIO.setup(21,GPIO.OUT)

#f = open("/var/www/html/blimp2.txt", mode = "a")
#f.write("\n")
#f.writelines("New Trial")
#f.write("\n")
#f.close()

first = sensor.read_altitude()

count = 0
n = 0
while count < 10:
    n += sensor.read_altitude()
    time.sleep(.1)
    count += 1
average = n/10;
print("Content-type: text/html\n\n")
print('Altitude = {0:0.2f} m'.format(average))
#f = open("/var/www/html/blimp2.txt", mode = "a")
#str = 'Altitude = {0:0.2f} m'.format(average)
#f.writelines(str)
#f.write("\n")
#f.close()
#if(average > 2):
   # GPIO.output(21, 1)
#else:
   # GPIO.output(21, 0)
