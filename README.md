Tests pour Mention.


Test Algo -> Dossier test 1
Test Librairie Cache -> Dossier test 2
Test Checkbox -> Dossier test 3


For test 1: 

Running
# PHP:
time php test1.php ./words ./test1.in > test1.out

# Go:
go build test1.go && time ./test1 ./words < test1.in > test1.out

# NodeJS:
time node test1.js ./words < test1.in > test1.out

# Check output:
diff -u test1.exp test1.out && echo OK
