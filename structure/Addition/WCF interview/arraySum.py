import functools

arr = [10,20,30,40,50]

#using concept of reduce

sum = functools.reduce(lambda a,b: a+b, arr)

print("the sum of elements is: ",sum)

