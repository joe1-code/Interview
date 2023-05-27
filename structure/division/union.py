ar1=[1,2,3,4,5,6,7,8]
ar2=[1,2,59,0,13]

union = list(set(ar1)|set(ar2))
intersection = list(set(ar1) & set(ar2))

print(union)
print(intersection)