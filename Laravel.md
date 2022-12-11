## == Schema Table == ##

# 1.Guru (Master) : 
`id`
`nama`
`email`
`notelp`

# 2.Kelas (Master) :
`id`
`kelas`

# 3.Jurusan (Master) : 
`id`
`jurusan`

# 4.Siswa : 
`id`
`nama`
`jenis_kelamin`
`id_kelas`
`id_jurusan`
`id_guru`

# 5.Category (Master) :
`id`
`tingkat_pelanggaran`
`poin`

# 6.Pelanggaran :
`id`
`nama_pelanggaran`
`tindak_lanjut`
`id_category`

# 7.SiswaPelanggaran (Pivot) :
`siswa_id`
`pelanggaran_id`

## == Schema Relationship == ##

# 1.1) Guru To Siswa : 
Relationship Type : `Many To Many`
Code Relationship : `belongsToMany`

# 1.2) Siswa To Guru : 
Relationship Type : `Many To Many`
Code Relationship : `belongsToMany`

# 2.2) Kelas To Siswa : 
Relationship Type : `One To Many`
Code Relationship : `hasMany`

# 2.2) Siswa To Kelas : 
Relationship Type : `One To Many (Inverse)`
Code Relationship : `belongsTo`

# 2.3) Jurusan To Siswa : 
Relationship Type : `One To Many`
Code Relationship : `hasMany`

# 2.3) Siswa To Jurusan : 
Relationship Type : `One To Many (Inverse)`
Code Relationship : `belongsTo`

# 2.4) Category To Pelanggaran : 
Relationship Type : `One To Many`
Code Relationship : `hasMany`

# 2.4) Pelanggaran To Category : 
Relationship Type : `One To Many (Inverse)`
Code Relationship : `belongsTo`

# 2.5) Siswa To SiswaPelanggaran : 
Relationship Type : `Many To Many`
Code Relationship : `belongsToMany`

# 2.5) Pelanggaran To SiswaPelanggaran : 
Relationship Type : `Many To Many`
Code Relationship : `belongsToMany`

## == CRUD & Relationship Target == ##

# Siswa : Done
# Kelas : Done
# Guru : Done
# Jurusan : Done 