#To addelements to an empty array.
arr = []
arr.append(1)
arr.append(2)
arr.append(3)
arr.append(4)
print(arr)

arr1 = [ 3, 4, 6, 4,  4, 6, 7, 41]
arr2 = [78, 3, 5, 7, -1, 9, 2, -5]

#union of two arrays
A = list(set(arr1)|set(arr2))

#intersection of two arrays
B = list(set(arr1) & set(arr2))
print(A)
print(B)