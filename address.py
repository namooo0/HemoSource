# -*- coding: utf-8 -*-
"""
Created on Wed Oct 24 16:04:28 2018

@author: Noura
"""

import csv
import geopy.geocoders

url= 'https://maps.googleapis.com/maps/api/geocode/json'

input_file = csv.DictReader(open("Hospital-Acquired_Infections__Beginning_2008.csv"))
new_csv = csv.DictReader(open("coordinates.csv"))
coord = new_csv
cv_f = input_file

coord = []

for row in cv_f:
    getAdd = row["Location 1"]
    coord.append(getAdd)
    seen = set()
    result = []
    for item in coord:        
        if item not in seen:
            seen.add(item)
            result.append(item)
            
for i in result:
    wow = i.strip('()')
    print (wow)

