#!/usr/bin/env python3

#This is a script that will take csv and take out hospitals names to put
#into the database

import csv

#put names in database
input_file = csv.DictReader(open("Hospital-Acquired_Infections__Beginning_2008.csv"))

#for row in input_file:
 #   name = int(row["Hospital Name"])
  #  if name == name
for row in input_file:
    hosName = row["Hospital Name"]
    #print(hosName)
    if hosName == hosName
        
