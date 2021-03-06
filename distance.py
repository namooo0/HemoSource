# -*- coding: utf-8 -*-
"""
Created on Wed Oct 24 16:04:28 2018

@author: Noura
"""

import csv
from geopy.geocoders import Nominatim
from geopy import distance

url= 'https://maps.googleapis.com/maps/api/geocode/json'

new_csv = csv.DictReader(open("coordinates.csv"))
coord = new_csv

geolocator = Nominatim(user_agent="HemoSource")

d = distance.distance

albany = (42.653238, -73.773969)

result = []
result2 = []

for lat in coord:
    x = lat["Latitude"]
    y = lat["Longitude"]
    everything = (x,y)
    #print(everything)
    helps = distance.distance(albany, everything).miles
    result.append(helps)
        
    for i in result:
        new_val = round(float(i), 1)
        result2.append(new_val)

with open('distancesFromAlbany.txt', 'w') as f:
	for item in result2:
		f.write("%s\n" % item)
