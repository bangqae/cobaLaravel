<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use App\Http\Requests\modelUpdate; //kelas requests model update untuk validasi

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$request adalah isi dari inputan dari method create
        
        $messages = [ //custom error message
            'nama.required' => 'Nama tidak boleh kosong',
            'nrp.unique' => 'NRP sudah ada',
            'nrp.required' => 'NRP tidak boleh kosong',
            'nrp.numeric' => 'NRP harus berupa angka',
            'nrp.digits' => 'NRP harus :digits digit',
            'email.unique' => 'Email sudah digunakan',
            'email.required' => 'Email tidak boleh kosong',
            'jurusan.required' => 'Jurusan tidak boleh kosong'
        ];
        
        $request->validate([
            'nama' => 'required',
            'nrp' => 'digits:9|unique:students|required|numeric',
            'email' => 'unique:students|required|email',
            'jurusan' => 'required'
        ], $messages); //tambahkan custom error message disini

        //cara pertama
        // $student = new Student;
        // $student->nama = $request->nama;
        // $student->nrp = $request->nrp;
        // $student->email = $request->email;
        // $student->jurusan = $request->jurusan;
        // $student->save();
        
        //cara kedua
        //jika ingin menambahkan data dengan create, harus menambahkan properti fillable (yg boleh boleh diisi manual) atau guarded (yg tidak boleh diisi manual) di modelnya
        // Student::create([
        //     'nama' => $request->nama,
        //     'nrp' => $request->nrp,
        //     'email' => $request->email,
        //     'jurusan' => $request->jurusan,
        // ]);
        
        //cara ketiga
        Student::create($request->all()); //all yang dimaksud adalah hanya yg diperbolehkan diisi (fillable)

        return redirect('/students')->with('status', 'Data berhasil ditambahkan!'); //kembali ke view student.index beserta kirim status
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('students.show', compact('student')); // kirim data 1 student ke blade show
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(modelUpdate $request, Student $student)  //tulis rules ciri2 data di modelUpdate
    {
        Student::where('id', $student->id)
            ->update([
                'nama' => $request->nama,
                'nrp' => $request->nrp,
                'email' => $request->email,
                'jurusan' => $request->jurusan
            ]);
            return redirect('/students')->with('status', 'Data berhasil diubah!'); //kembali ke view student.index beserta kirim status
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        Student::destroy($student->id);
        return redirect('/students')->with('status', 'Data berhasil dihapus!'); //kembali ke view student.index beserta kirim status
    }
}
