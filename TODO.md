# TODO - Fitur Hapus Ulasan Admin

## Plan yang disetujui:
- Admin bisa remove/hapus ulasan user di halaman admin

## Tahap Implementasi:

- [x] 1. Migration: Tambah field `is_visible` ke tabel reviews
- [x] 2. Update Review Model: Update $fillable dan query scope
- [x] 3. Buat Admin ReviewController: Method untuk hapus review
- [x] 4. Update Routes: Tambah route untuk admin review
- [x] 5. Buat Admin View: Halaman list review
- [x] 6. Update Admin Layout: Tambah menu "Ulasan"
- [x] 7. Update Product View: Tampilkan hanya review visible

