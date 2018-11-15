# -*- coding: utf-8 -*-
"""
Created on Wed Oct 24 16:04:28 2018

@author: Noura
"""

import csv
from geopy.geocoders import Nominatim

url= 'https://maps.googleapis.com/maps/api/geocode/json'

new_csv = csv.DictReader(open("coordinates.csv"))
coord = new_csv

geolocator = Nominatim(user_agent="HemoSource")
#location = geolocator.reverse("52.509669, 13.376294")
#print(location.address)
result = []
lats = []
longs = []

for lat in coord:
    x = lat["Latitude"]
    y = lat["Longitude"]
 #   print(x, y)

#print(complex(y))
    location = geolocator.reverse((x, y))

    result.append(location.address)
    

with open('ThisIsTheListOfAddresses.txt', 'w') as f:
	for item in result:
		f.write("%s\n" % item)
            
