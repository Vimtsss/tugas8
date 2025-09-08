<?php
$hasil = "";
if (isset($_POST['angka1'], $_POST['angka2'], $_POST['operasi'])) {
    $a = $_POST['angka1'];
    $b = $_POST['angka2'];
    $op = $_POST['operasi'];

    $ops = [
        "tambah" => $a + $b,
        "kurang" => $a - $b,
        "kali"   => $a * $b,
        "bagi"   => $b != 0 ? $a / $b : "Error: bagi 0!"
    ];

    $hasil = $ops[$op] ?? "Operasi tidak valid!";
}
?>
<form method="post">
    <input type="number" name="angka1" required>
    <select name="operasi">
        <option value="tambah">+</option>
        <option value="kurang">-</option>
        <option value="kali">×</option>
        <option value="bagi">÷</option>
    </select>
    <input type="number" name="angka2" required>
    <button type="submit">Hitung</button>
</form>
<h3>Hasil: <?= $hasil ?></h3>
