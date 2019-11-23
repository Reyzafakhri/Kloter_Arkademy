#nomor 4
def kelipatan(a):
    for i in range(1,a+1):
        if i % 3 == 0 and i % 7 == 0:
            print("Arkademy",end=", ")
        elif i % 3 == 0 :
            print("Arka", end=", ")
        elif i % 7 == 0 :
            print("Demy", end=", ")
        else:
            print(i, end=", ")
            
kelipatan(21)
