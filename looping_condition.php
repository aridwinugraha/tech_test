foresch(range(1, 100) as $angka) {
    if ($angka % 3 == 0) echo "Foo";
    if ($angka % 5 == 0) echo "Bar";
    if ($angka % 3 == 0 && $angka % 5 == 0) echo "FooBar";
}
