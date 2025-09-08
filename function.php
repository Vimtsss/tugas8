<?php
function kalkulator($a, $b, $op) {
    if ($op == "tambah") return $a + $b;
    if ($op == "kurang") return $a - $b;
    if ($op == "kali") return $a * $b;
    if ($op == "bagi") return $b != 0 ? $a / $b : "Error: bagi 0!";
    return "Operasi tidak valid!";
}

$hasil = "";
if (isset($_POST['angka1'], $_POST['angka2'], $_POST['operasi'])) {
    $hasil = kalkulator($_POST['angka1'], $_POST['angka2'], $_POST['operasi']);
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
