def scope_test():
    def do_local():
        spam = "local"

    def do_nonlocal():
        nonlocal spam
        spam = "nonlocal"

    def do_global():
        global spam
        spam = "global"

    spam = "the first value"
    do_local()
    print("ア")
    print(spam)
    do_nonlocal()
    print("イ")
    print(spam)
    do_global()
    print("ウ")
    print(spam)


scope_test()
print("エ")
print(spam)
