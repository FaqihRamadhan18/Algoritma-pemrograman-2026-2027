import time
import sys

lirik = [
    "Takkan ku berubah..."
    "Walau tak bersama..."
    "Kita tak pernah     terpisah..."
    "         "
    "Melintas ruang dan  waktu..."
    "             "
    "SELAMANYAAA... "
]

for baris in lirik:
    for huruf in baris:
        print(huruf,end="",flush=True)
        time.sleep(0.15)
    print()
    time.sleep(1.5)