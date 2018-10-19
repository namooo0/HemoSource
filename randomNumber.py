#!/usr/bin/env python3

#This is a script that will take csv and take out hospitals names to put
#into the database

import csv
import random

input_file = csv.DictReader(open("Hospital-Acquired_Infections__Beginning_2008.csv"))
cv_f = input_file
'''hosName finally gets all hospital names
   need to get only one copy of each'''

'''
    program is goin through and adding albany, next hospital, alb, next hos
    other hos, alb
    ugh
'''
i = random.sample(range(75, 1000), 8)
run = i *200
#print(run)

x = 8
while x < len(i):
    i.insert(x, '\n')
    i += (n+1)

with open('listOfData.txt', 'w') as f:
    for x in i:
        f.write("%s'n" % run)
