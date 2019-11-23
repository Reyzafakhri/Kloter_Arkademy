def pairSocks(l):
    hasil = []
    a= 1


    for i in l:
        if l.count(i) > 1:
            hasil.append(i)
    hasil.sort()
    b = hasil[0]
    for j in range(1,len(hasil)):
        if b != hasil[j]: 
            b=hasil[j]
            a+=1
    print(a)
    print(hasil)
    
lst = (5,13,7,5,9,20,9,5,14,13,14,7)
pairSocks(lst)
