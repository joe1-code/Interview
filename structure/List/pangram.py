from string import ascii_lowercase as asc_lower

def check(s):
 return set(asc_lower) - set(s.lower()) == set([])

names = input("enter your sentence: ")

if(check(names) == True):
 print("this is pangram")
else:
 print("not pangram")
