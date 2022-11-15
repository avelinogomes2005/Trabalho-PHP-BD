#! /usr/bin/env python3.9

import hashlib
import json
import sys
#for line in sys.argv[1]:
#    l = line.rstrip('\n').encode('utf-8')
 #   o = json.loads(line)
  #  o["id"] = hashlib.md5(l).hexdigest()
   # print(json.dumps(o))
#   print(line)

# cadastro
if sys.argv[1] == '1':
    line = sys.argv[2]
    o = json.loads(line)
    o["senha"] = hashlib.sha256(str(o["senha"]).encode('utf-8')).hexdigest()
    o["id"] = hashlib.md5(str(o).encode('utf-8')).hexdigest()
    print(str(json.dumps(o)))

elif sys.argv[1] == '2':
    line = sys.argv[2]
    o = json.loads(line)
    print(json.dumps(o))

# checkar login
elif sys.argv[1] == '3':
    email = sys.argv[2]
    senha = sys.argv[3]
    Lines = open("banco.txt", "r")
#
    for l in Lines:
        line = json.loads(l.rstrip("\n"))
        if hashlib.sha256(str(line["senha"]).encode("utf-8")).hexdigest() == hashlib.sha256(str(senha).encode("utf-8")).hexdigest() and line["email"] == email:
            print(str(line["id"]))
    print("FALSE")
