let num = [11,  2,  3,  5, 6, 10, 27, 14]

for (pos in num) {
    for (cont in num){ 
        if (num[pos] < num[cont]) {
            var n = num[pos] 
            num[pos] = 
            num[cont] 
            num[cont] = n
        }
    }
}

console.log(num)


