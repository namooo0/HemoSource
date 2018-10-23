# -*- coding: utf-8 -*-
"""
Created on Tue Oct 23 19:24:34 2018

@author: Noura
"""

csvraw = open("ActualList.txt", "r")
stamps = open("RealData.txt", "r")
    
for line in csvraw:
    print(line.rstrip() + stamps.readline().strip())
    
    
