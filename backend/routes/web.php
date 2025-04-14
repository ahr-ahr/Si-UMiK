<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

/* LOKASI */

Route::get('/job', function () {
    return view('job');
})->name('job');

Route::get('/lokasi', function () {
    return view('lokasi');
})->name('lokasi');

Route::get('/jawatimur', function () {
    return view('jawatimur');
})->name('jawatimur');

Route::get('/jawatengah', function () {
    return view('jawatengah');
})->name('jawatengah');

Route::get('/jawabarat', function () {
    return view('jawabarat');
})->name('jawabarat');

Route::get('/sumut', function () {
    return view('sumut');
})->name('sumut');

Route::get('/sumbar', function () {
    return view('sumbar');
})->name('sumbar');

Route::get('/lokasiawal', function () {
    return view('lokasiawal');
})->name('lokasiawal');

Route::get('/lokasiaceh', function () {
    return view('lokasiaceh');
})->name('lokasiaceh');

Route::get('/sumaterasel', function () {
    return view('sumaterasel');
})->name('sumaterasel');

Route::get('/lokasiriau', function () {
    return view('lokasiriau');
})->name('lokasiriau');

Route::get('/pulauriau', function () {
    return view('pulauriau');
})->name('pulauriau');

Route::get('/jambi', function () {
    return view('jambi');
})->name('jambi');

Route::get('/bengkulu', function () {
    return view('bengkulu');
})->name('bengkulu');

Route::get('/lampung', function () {
    return view('lampung');
})->name('lampung');

Route::get('/bangkabelitung', function () {
    return view('bangkabelitung');
})->name('bangkabelitung');

Route::get('/banten', function () {
    return view('banten');
})->name('banten');

Route::get('/DKI', function () {
    return view('DKI');
})->name('DKI');

Route::get('/yogya', function () {
    return view('yogyakarta');
})->name('yogya');

Route::get('/bali', function () {
    return view('bali');
})->name('bali');

Route::get('/NTB', function () {
    return view('NTB');
})->name('NTB');

Route::get('/NTT', function () {
    return view('NTT');
})->name('NTT');

Route::get('/kalbar', function () {
    return view('kalbar');
})->name('kalbar');

Route::get('/kalsel', function () {
    return view('kalsel');
})->name('kalsel');

Route::get('/kalteng', function () {
    return view('kalteng');
})->name('kalteng');

Route::get('/kaltim', function () {
    return view('kaltim');
})->name('kaltim');

Route::get('/kaltara', function () {
    return view('kaltara');
})->name('kaltara');

Route::get('/gorontalo', function () {
    return view('gorontalo');
})->name('gorontalo');

Route::get('/sulasel', function () {
    return view('sulasel');
})->name('sulasel');

Route::get('/sultra', function () {
    return view('sultra');
})->name('sultra');

Route::get('/sulteng', function () {
    return view('sulteng');
})->name('sulteng');

Route::get('/sulut', function () {
    return view('sulut');
})->name('sulut');

Route::get('/sulbar', function () {
    return view('sulbar');
})->name('sulbar');

Route::get('/maluku', function () {
    return view('maluku');
})->name('maluku');

Route::get('/malut', function () {
    return view('malut');
})->name('malut');

Route::get('/papua', function () {
    return view('papua');
})->name('papua');

Route::get('/papuabar', function () {
    return view('papuabar');
})->name('papuabar');

Route::get('/surabaya', function () {
    return view('surabaya');
})->name('surabaya');

Route::get('/gresik', function () {
    return view('gresik');
})->name('gresik');

Route::get('/malang', function () {
    return view('malang');
})->name('malang');

Route::get('/sidoarjo', function () {
    return view('sidoarjo');
})->name('sidoarjo');

Route::get('/pasuruan', function () {
    return view('pasuruan');
})->name('pasuruan');

Route::get('/mojokerto', function () {
    return view('mojokerto');
})->name('mojokerto');

Route::get('/blitar', function () {
    return view('blitar');
})->name('blitar');

Route::get('/jombang', function () {
    return view('jombang');
})->name('jombang');

Route::get('/kediri', function () {
    return view('kediri');
})->name('kediri');

Route::get('/ponorogo', function () {
    return view('ponorogo');
})->name('ponorogo');

Route::get('/banyuwangi', function () {
    return view('banyuwangi');
})->name('banyuwangi');

Route::get('/bojonegoro', function () {
    return view('bojonegoro');
})->name('bojonegoro');

Route::get('/bondowoso', function () {
    return view('bondowoso');
})->name('bondowoso');

Route::get('/jember', function () {
    return view('jember');
})->name('jember');

Route::get('/lumajang', function () {
    return view('lumajang');
})->name('lumajang');

Route::get('/madiun', function () {
    return view('madiun');
})->name('madiun');

Route::get('/magetan', function () {
    return view('magetan');
})->name('magetan');

Route::get('/nganjuk', function () {
    return view('nganjuk');
})->name('nganjuk');

Route::get('/ngawi', function () {
    return view('ngawi');
})->name('ngawi');

Route::get('/pacitan', function () {
    return view('pacitan');
})->name('pacitan');

Route::get('/pamekasan', function () {
    return view('pamekasan');
})->name('pamekasan');

Route::get('/probolinggo', function () {
    return view('probolinggo');
})->name('probolinggo');

Route::get('/sampang', function () {
    return view('sampang');
})->name('sampang');

Route::get('/situbondo', function () {
    return view('situbondo');
})->name('situbondo');

Route::get('/trenggalek', function () {
    return view('trenggalek');
})->name('trenggalek');

Route::get('/ponorogok', function () {
    return view('ponorogok');
})->name('ponorogok');

Route::get('/acehbarat', function () {
    return view('acehbarat');
})->name('acehbarat');

Route::get('/acehbesar', function () {
    return view('acehbesar');
})->name('acehbesar');

Route::get('/acehbaratdaya', function () {
    return view('acehbaratdaya');
})->name('acehbaratdaya');

Route::get('/acehselatan', function () {
    return view('acehselatan');
})->name('acehselatan');

Route::get('/acehtamiang', function () {
    return view('acehtamiang');
})->name('acehtamiang');

Route::get('/acehjaya', function () {
    return view('acehjaya');
})->name('acehjaya');

Route::get('/acehsingkil', function () {
    return view('acehsingkil');
})->name('acehsingkil');

Route::get('/acehtengah', function () {
    return view('acehtengah');
})->name('acehtengah');

Route::get('/acehtenggara', function () {
    return view('acehtenggara');
})->name('acehtenggara');

Route::get('/acehtimur', function () {
    return view('acehtimur');
})->name('acehtimur');


Route::get('/acehutara', function () {
    return view('acehutara');
})->name('acehutara');

Route::get('/benermeriah', function () {
    return view('benermeriah');
})->name('benermeriah');

Route::get('/bireuen', function () {
    return view('bireuen');
})->name('bireuen');

Route::get('/gayolues', function () {
    return view('gayolues');
})->name('gayolues');

Route::get('/naganraya', function () {
    return view('naganraya');
})->name('naganraya');

Route::get('/pidie', function () {
    return view('pidie');
})->name('pidie');

Route::get('/pidiejaya', function () {
    return view('pidiejaya');
})->name('pidiejaya');

Route::get('/simeule', function () {
    return view('simeule');
})->name('simeule');

Route::get('/bandaaceh', function () {
    return view('bandaaceh');
})->name('bandaaceh');

Route::get('/kotalangsa', function () {
    return view('kotalangsa');
})->name('kotalangsa');

Route::get('/kotalubuklinggau', function () {
    return view('lubuklinggau');
})->name('kotalubuklinggau');

Route::get('/lhokseumawe', function () {
    return view('lhokseumawe');
})->name('lhokseumawe');

Route::get('/kotasabang', function () {
    return view('kotasabang');
})->name('kotasabang');

Route::get('/subussalam', function () {
    return view('subussalam');
})->name('subussalam');

Route::get('/asahan', function () {
    return view('asahan');
})->name('asahan');

Route::get('/batubara', function () {
    return view('batubara');
})->name('batubara');

Route::get('/dairi', function () {
    return view('dairi');
})->name('dairi');

Route::get('/deliserdang', function () {
    return view('deliserdang');
})->name('deliserdang');

Route::get('/humbang', function () {
    return view('humbang');
})->name('humbang');

Route::get('/labuhanbatusel', function () {
    return view('labuhanbatusel');
})->name('labuhanbatusel');

Route::get('/labuhanbatuutara', function () {
    return view('labuhanbatuutara');
})->name('labuhanbatuutara');

Route::get('/langkat', function () {
    return view('langkat');
})->name('langkat');

Route::get('/mandaling', function () {
    return view('mandaling');
})->name('mandaling');

Route::get('/nias', function () {
    return view('nias');
})->name('nias');

Route::get('/niasbarat', function () {
    return view('niasbarat');
})->name('niasbarat');

Route::get('/niasselatan', function () {
    return view('niasselatan');
})->name('niasselatan');

Route::get('/niasutara', function () {
    return view('niasutara');
})->name('niasutara');

Route::get('/padanglawas', function () {
    return view('padanglawas');
})->name('padanglawas');

Route::get('/padanglawasut', function () {
    return view('padanglawasut');
})->name('padanglawasut');

Route::get('/pakpakbharat', function () {
    return view('pakpakbharat');
})->name('pakpakbharat');

Route::get('/samosir', function () {
    return view('samosir');
})->name('samosir');

Route::get('/serdangbedagai', function () {
    return view('serdangbedagai');
})->name('serdangbedagai');

Route::get('/simalungun', function () {
    return view('simalungun');
})->name('simalungun');

Route::get('/tapanulisel', function () {
    return view('tapanulisel');
})->name('tapanulisel');

Route::get('/tapanuliteng', function () {
    return view('tapanuliteng');
})->name('tapanuliteng');

Route::get('/tapanuliut', function () {
    return view('tapanuliut');
})->name('tapanuliut');

Route::get('/tobasamosir', function () {
    return view('tobasamosir');
})->name('tobasamosir');

Route::get('/kotabinjai', function () {
    return view('kotabinjai');
})->name('kotabinjai');

Route::get('/gunungsitoli', function () {
    return view('gunungsitoli');
})->name('gunungsitoli');

Route::get('/kotamedan', function () {
    return view('kotamedan');
})->name('kotamedan');

Route::get('/padansidempuan', function () {
    return view('padansidempuan');
})->name('padansidempuan');

Route::get('/permartasiantar', function () {
    return view('permartasiantar');
})->name('permartasiantar');

Route::get('/sibolga', function () {
    return view('sibolga');
})->name('sibolga');

Route::get('/tanjungbalai', function () {
    return view('tanjungbalai');
})->name('tanjungbalai');

Route::get('/tebingtinggi', function () {
    return view('tebingtinggi');
})->name('tebingtinggi');

Route::get('/agan', function () {
    return view('agan');
})->name('agan');

Route::get('/dharmasraya', function () {
    return view('dharmasraya');
})->name('dharmasraya');

Route::get('/mentawi', function () {
    return view('mentawi');
})->name('mentawi');

Route::get('/limapuluhkota', function () {
    return view('limapuluhkota');
})->name('limapuluhkota');

Route::get('/padangpariman', function () {
    return view('padangpariman');
})->name('padangpariman');

Route::get('/pasaman', function () {
    return view('pasaman');
})->name('pasaman');

Route::get('/pesisirselatan', function () {
    return view('pesisirselatan');
})->name('pesisirselatan');

Route::get('/sijunjung', function () {
    return view('sijunjung');
})->name('sijunjung');

Route::get('/solok', function () {
    return view('solok');
})->name('solok');

Route::get('/tanahdatar', function () {
    return view('tanahdatar');
})->name('tanahdatar');

Route::get('/bukittinggi', function () {
    return view('bukittinggi');
})->name('bukittinggi');

Route::get('/kotapadang', function () {
    return view('kotapadang');
})->name('kotapadang');

Route::get('/padangpanjang', function () {
    return view('padangpanjang');
})->name('padangpanjang');

Route::get('/pariaman', function () {
    return view('pariaman');
})->name('pariaman');

Route::get('/payakumbuh', function () {
    return view('payakumbuh');
})->name('payakumbuh');

Route::get('/sawahlunto', function () {
    return view('sawahlunto');
})->name('sawahlunto');

Route::get('/kotasolok', function () {
    return view('kotasolok');
})->name('kotasolok');

Route::get('/banyuasin', function () {
    return view('banyuasin');
})->name('banyuasin');

Route::get('/empatlawang', function () {
    return view('empatlawang');
})->name('empatlawang');

Route::get('/lahat', function () {
    return view('lahat');
})->name('lahat');

Route::get('/muaraenim', function () {
    return view('muaraenim');
})->name('muaraenim');

Route::get('/muisirawas', function () {
    return view('muisirawas');
})->name('muisirawas');

Route::get('/mugirawasut', function () {
    return view('mugirawasut');
})->name('mugirawasut');

Route::get('/oganilir', function () {
    return view('oganilir');
})->name('oganilir');

Route::get('/ogankomeringilir', function () {
    return view('ogankomeringilir');
})->name('ogankomeringilir');

Route::get('/ogankomeringulu', function () {
    return view('ogankomeringulu');
})->name('ogankomeringulu');

Route::get('/oganuluselatan', function () {
    return view('oganuluselatan');
})->name('oganuluselatan');

Route::get('/oganulutimur', function () {
    return view('oganulutimur');
})->name('oganulutimur');

Route::get('/penukalabab', function () {
    return view('penukalabab');
})->name('penukalabab');

Route::get('/lubuklingau', function () {
    return view('lubuklingau');
})->name('lubuklingau');

Route::get('/kotapagaralam', function () {
    return view('kotapagaralam');
})->name('kotapagaralam');

Route::get('/kotapalembang', function () {
    return view('kotapalembang');
})->name('kotapalembang');

Route::get('/kotaprabumulih', function () {
    return view('kotaprabumulih');
})->name('kotaprabumulih');

Route::get('/bangkalis', function () {
    return view('bangkalis');
})->name('bangkalis');

Route::get('/indrahilir', function () {
    return view('indrahilir');
})->name('indrahilir');

Route::get('/indrahulu', function () {
    return view('indrahulu');
})->name('indrahulu');

Route::get('/kampar', function () {
    return view('kampar');
})->name('kampar');

Route::get('/meranti', function () {
    return view('meranti');
})->name('meranti');

Route::get('/singingi', function () {
    return view('singingi');
})->name('singingi');

Route::get('/pelalawan', function () {
    return view('pelalawan');
})->name('pelalawan');

Route::get('/rokanhilir', function () {
    return view('rokanhilir');
})->name('rokanhilir');

Route::get('/rokanhulu', function () {
    return view('rokanhulu');
})->name('rokanhulu');

Route::get('/siak', function () {
    return view('siak');
})->name('siak');

Route::get('/dumai', function () {
    return view('dumai');
})->name('dumai');

Route::get('/pekanbaru', function () {
    return view('pekanbaru');
})->name('pekanbaru');

Route::get('/lubuklinggau', function () {
    return view('lubuklinggau');
})->name('lubuklinggau');

Route::get('/pagaralam', function () {
    return view('pagaralam');
})->name('pagaralam');

Route::get('/palembang', function () {
    return view('palembang');
})->name('palembang');

Route::get('/prabumulih', function () {
    return view('prabumulih');
})->name('prabumulih');

// web.php

Route::get('/bangkalis', function () {
    return view('bangkalis');
})->name('bangkalis');

Route::get('/indrahilir', function () {
    return view('indrahilir');
})->name('indrahilir');

Route::get('/indrahulu', function () {
    return view('indrahulu');
})->name('indrahulu');

Route::get('/kampar', function () {
    return view('kampar');
})->name('kampar');

Route::get('/meranti', function () {
    return view('meranti');
})->name('meranti');

Route::get('/singingi', function () {
    return view('singingi');
})->name('singingi');

Route::get('/pelalawan', function () {
    return view('pelalawan');
})->name('pelalawan');

Route::get('/rokanhilir', function () {
    return view('rokanhilir');
})->name('rokanhilir');

Route::get('/rokanhulu', function () {
    return view('rokanhulu');
})->name('rokanhulu');

Route::get('/siak', function () {
    return view('siak');
})->name('siak');

Route::get('/dumai', function () {
    return view('dumai');
})->name('dumai');

Route::get('/pekanbaru', function () {
    return view('pekanbaru');
})->name('pekanbaru');

Route::get('/lubuklinggau', function () {
    return view('lubuklinggau');
})->name('lubuklinggau');

Route::get('/pagaralam', function () {
    return view('pagaralam');
})->name('pagaralam');

Route::get('/palembang', function () {
    return view('palembang');
})->name('palembang');

Route::get('/prabumulih', function () {
    return view('prabumulih');
})->name('prabumulih');

Route::get('/bintan', function () {
    return view('bintan');
})->name('bintan');

Route::get('/karimum', function () {
    return view('karimum');
})->name('karimum');

Route::get('/anmbas', function () {
    return view('anmbas');
})->name('anmbas');

Route::get('/lingga', function () {
    return view('lingga');
})->name('lingga');

Route::get('/natuna', function () {
    return view('natuna');
})->name('natuna');

Route::get('/batam', function () {
    return view('batam');
})->name('batam');

Route::get('/tanjuungpinang', function () {
    return view('tanjuungpinang');
})->name('tanjuungpinang');

Route::get('/batanghari', function () {
    return view('batanghari');
})->name('batanghari');

Route::get('/bungo', function () {
    return view('bungo');
})->name('bungo');

Route::get('/kerinci', function () {
    return view('kerinci');
})->name('kerinci');

Route::get('/merangin', function () {
    return view('merangin');
})->name('merangin');

Route::get('/muarojambi', function () {
    return view('muarojambi');
})->name('muarojambi');

Route::get('/sarolangun', function () {
    return view('sarolangun');
})->name('sarolangun');

Route::get('/jabungbarat', function () {
    return view('jabungbarat');
})->name('jabungbarat');

Route::get('/jabungtimur', function () {
    return view('jabungtimur');
})->name('jabungtimur');

Route::get('/tebo', function () {
    return view('tebo');
})->name('tebo');

Route::get('/jambi', function () {
    return view('jambi');
})->name('jambi');

Route::get('/sungaipenuh', function () {
    return view('sungaipenuh');
})->name('sungaipenuh');

Route::get('/bengkuluselatan', function () {
    return view('bengkuluselatan');
})->name('bengkuluselatan');

Route::get('/bengkulutengah', function () {
    return view('bengkulutengah');
})->name('bengkulutengah');

Route::get('/bengkuluutara', function () {
    return view('bengkuluutara');
})->name('bengkuluutara');

Route::get('/kaur', function () {
    return view('kaur');
})->name('kaur');

Route::get('/kepahiang', function () {
    return view('kepahiang');
})->name('kepahiang');

Route::get('/lebong', function () {
    return view('lebong');
})->name('lebong');

Route::get('/mukomuko', function () {
    return view('mukomuko');
})->name('mukomuko');

Route::get('/rejanglebong', function () {
    return view('rejanglebong');
})->name('rejanglebong');

Route::get('/seluma', function () {
    return view('seluma');
})->name('seluma');

Route::get('/bengkulu', function () {
    return view('bengkulu');
})->name('bengkulu');

Route::get('/bangka', function () {
    return view('bangka');
})->name('bangka');

Route::get('/bangkabarat', function () {
    return view('bangkabarat');
})->name('bangkabarat');

Route::get('/bangkaselatan', function () {
    return view('bangkaselatan');
})->name('bangkaselatan');

Route::get('/bangkatengah', function () {
    return view('bangkatengah');
})->name('bangkatengah');

Route::get('/belitung', function () {
    return view('belitung');
})->name('belitung');

Route::get('/belitungtimur', function () {
    return view('belitungtimur');
})->name('belitungtimur');

Route::get('/pangkalpinang', function () {
    return view('pangkalpinang');
})->name('pangkalpinang');

Route::get('/lampungtengah', function () {
    return view('lampungtengah');
})->name('lampungtengah');

Route::get('/lampungutara', function () {
    return view('lampungutara');
})->name('lampungutara');

Route::get('/lampungselatan', function () {
    return view('lampungselatan');
})->name('lampungselatan');

Route::get('/lampungbarat', function () {
    return view('lampungbarat');
})->name('lampungbarat');

Route::get('/lampungtimur', function () {
    return view('lampungtimur');
})->name('lampungtimur');

Route::get('/mesuji', function () {
    return view('mesuji');
})->name('mesuji');

Route::get('/pesawaran', function () {
    return view('pesawaran');
})->name('pesawaran');

Route::get('/pesisirbarat', function () {
    return view('pesisirbarat');
})->name('pesisirbarat');

Route::get('/pringsewu', function () {
    return view('pringsewu');
})->name('pringsewu');

Route::get('/tulangbawang', function () {
    return view('tulangbawang');
})->name('tulangbawang');

Route::get('/tulangbawangbarat', function () {
    return view('tulangbawangbarat');
})->name('tulangbawangbarat');

Route::get('/tanggamus', function () {
    return view('tanggamus');
})->name('tanggamus');

Route::get('/waykanan', function () {
    return view('waykanan');
})->name('waykanan');

Route::get('/bandarlampung', function () {
    return view('bandarlampung');
})->name('bandarlampung');

Route::get('/metro', function () {
    return view('metro');
})->name('metro');

Route::get('/lebak', function () {
    return view('lebak');
})->name('lebak');

Route::get('/pandeglang', function () {
    return view('pandeglang');
})->name('pandeglang');

Route::get('/serang', function () {
    return view('serang');
})->name('serang');

Route::get('/tangerang', function () {
    return view('tangerang');
})->name('tangerang');

Route::get('/cilegon', function () {
    return view('cilegon');
})->name('cilegon');

Route::get('/kotaserang', function () {
    return view('kotaserang');
})->name('kotaserang');

Route::get('/kotatangerang', function () {
    return view('kotatangerang');
})->name('kotatangerang');

Route::get('/tangerangselatan', function () {
    return view('tangerangselatan');
})->name('tangerangselatan');

Route::get('/bandungbarat', function () {
    return view('bandungbarat');
})->name('bandungbarat');

Route::get('/bekasi', function () {
    return view('bekasi');
})->name('bekasi');

Route::get('/kotabekasi', function () {
    return view('kotabekasi');
})->name('kotabekasi');


Route::get('/bogor', function () {
    return view('bogor');
})->name('bogor');

Route::get('/ciamis', function () {
    return view('ciamis');
})->name('ciamis');

Route::get('/cianjur', function () {
    return view('cianjur');
})->name('cianjur');

Route::get('/cirebon', function () {
    return view('cirebon');
})->name('cirebon');

Route::get('/garut', function () {
    return view('garut');
})->name('garut');

Route::get('/indramayu', function () {
    return view('indramayu');
})->name('indramayu');

Route::get('/karawang', function () {
    return view('karawang');
})->name('karawang');

Route::get('/kuningan', function () {
    return view('kuningan');
})->name('kuningan');

Route::get('/majalengka', function () {
    return view('majalengka');
})->name('majalengka');

Route::get('/pangandaran', function () {
    return view('pangandaran');
})->name('pangandaran');

Route::get('/purwakarta', function () {
    return view('purwakarta');
})->name('purwakarta');

Route::get('/subang', function () {
    return view('subang');
})->name('subang');

Route::get('/sukabumi', function () {
    return view('sukabumi');
})->name('sukabumi');

Route::get('/sumedang', function () {
    return view('sumedang');
})->name('sumedang');

Route::get('/tasikmalaya', function () {
    return view('tasikmalaya');
})->name('tasikmalaya');

Route::get('/kotabandung', function () {
    return view('kotabandung');
})->name('kotabandung');

Route::get('/kotabanjar', function () {
    return view('kotabanjar');
})->name('kotabanjar');

Route::get('/kotabogor', function () {
    return view('kotabogor');
})->name('kotabogor');

Route::get('/kotacimahi', function () {
    return view('kotacimahi');
})->name('kotacimahi');

Route::get('/kotacirebon', function () {
    return view('kotacirebon');
})->name('kotacirebon');

Route::get('/kotadepok', function () {
    return view('kotadepok');
})->name('kotadepok');

Route::get('/kota sukabumi', function () {
    return view('kotasukabumi');
})->name('kotasukabumi');

Route::get('/kotatasikmalaya', function () {
    return view('kotatasikmalaya');
})->name('kotatasikmalaya');

Route::get('/banjarnegara', function () {
    return view('banjarnegara');
})->name('banjarnegara');

Route::get('/banyumas', function () {
    return view('banyumas');
})->name('banyumas');

Route::get('/batang', function () {
    return view('batang');
})->name('batang');

Route::get('/blora', function () {
    return view('blora');
})->name('blora');

Route::get('/boyolali', function () {
    return view('boyolali');
})->name('boyolali');

Route::get('/brebes', function () {
    return view('brebes');
})->name('brebes');

Route::get('/cilacap', function () {
    return view('cilacap');
})->name('cilacap');

Route::get('/demak', function () {
    return view('demak');
})->name('demak');

Route::get('/grobogan', function () {
    return view('grobogan');
})->name('grobogan');

Route::get('/jepara', function () {
    return view('jepara');
})->name('jepara');

Route::get('/karanganyar', function () {
    return view('karanganyar');
})->name('karanganyar');

Route::get('/kebumen', function () {
    return view('kebumen');
})->name('kebumen');

Route::get('/kendal', function () {
    return view('kendal');
})->name('kendal');

Route::get('/klaten', function () {
    return view('klaten');
})->name('klaten');

Route::get('/kudus', function () {
    return view('kudus');
})->name('kudus');

Route::get('/magelang', function () {
    return view('magelang');
})->name('magelang');

Route::get('/pati', function () {
    return view('pati');
})->name('pati');

Route::get('/pekalongan', function () {
    return view('pekalongan');
})->name('pekalongan');

Route::get('/pemalang', function () {
    return view('pemalang');
})->name('pemalang');

Route::get('/purbalingga', function () {
    return view('purbalingga');
})->name('purbalingga');

Route::get('/purworejo', function () {
    return view('purworejo');
})->name('purworejo');

Route::get('/rembang', function () {
    return view('rembang');
})->name('rembang');

Route::get('/semarang', function () {
    return view('semarang');
})->name('semarang');

Route::get('/sragen', function () {
    return view('sragen');
})->name('sragen');

Route::get('/sukoharjo', function () {
    return view('sukoharjo');
})->name('sukoharjo');

Route::get('/tegal', function () {
    return view('tegal');
})->name('tegal');

Route::get('/temanggung', function () {
    return view('temanggung');
})->name('temanggung');

Route::get('/wonogiri', function () {
    return view('wonogiri');
})->name('wonogiri');

Route::get('/wonosobo', function () {
    return view('wonosobo');
})->name('wonosobo');

Route::get('/salatiga', function () {
    return view('salatiga');
})->name('salatiga');

Route::get('/surakarta', function () {
    return view('surakarta');
})->name('surakarta');

Route::get('/jakartabarat', function () {
    return view('jakartabarat');
})->name('jakartabarat');

Route::get('/jakartapusat', function () {
    return view('jakartapusat');
})->name('jakartapusat');

Route::get('/jakartaselatan', function () {
    return view('jakartaselatan');
})->name('jakartaselatan');

Route::get('/jakartatimur', function () {
    return view('jakartatimur');
})->name('jakartatimur');

Route::get('/jakartautara', function () {
    return view('jakartautara');
})->name('jakartautara');

Route::get('/kepulauanseribu', function () {
    return view('kepulauanseribu');
})->name('kepulauanseribu');

Route::get('/bantul', function () {
    return view('bantul');
})->name('bantul');

Route::get('/gunungkidul', function () {
    return view('gunungkidul');
})->name('gunungkidul');

Route::get('/kulonporgo', function () {
    return view('kulonporgo');
})->name('kulonporgo');

Route::get('/sleman', function () {
    return view('sleman');
})->name('sleman');

Route::get('/kotayogyakarta', function () {
    return view('kotayogyakarta');
})->name('kotayogyakarta');

Route::get('/badug', function () {
    return view('badug');
})->name('badug');

Route::get('/bangli', function () {
    return view('bangli');
})->name('bangli');

Route::get('/buleleg', function () {
    return view('buleleg');
})->name('buleleg');

Route::get('/gianyar', function () {
    return view('gianyar');
})->name('gianyar');

Route::get('/jembrana', function () {
    return view('jembrana');
})->name('jembrana');

Route::get('/karangasem', function () {
    return view('karangasem');
})->name('karangasem');

Route::get('/klungkung', function () {
    return view('klungkung');
})->name('klungkung');

Route::get('/tabanan', function () {
    return view('tabanan');
})->name('tabanan');

Route::get('/denpasar', function () {
    return view('denpasar');
})->name('denpasar');

Route::get('/bima', function () {
    return view('bima');
})->name('bima');

Route::get('/dompu', function () {
    return view('dompu');
})->name('dompu');

Route::get('/lombokbarat', function () {
    return view('lombokbarat');
})->name('lombokbarat');

Route::get('/lomboktengah', function () {
    return view('lomboktengah');
})->name('lomboktengah');

Route::get('/lomboktimur', function () {
    return view('lomboktimur');
})->name('lomboktimur');

Route::get('/lombokutara', function () {
    return view('lombokutara');
})->name('lombokutara');

Route::get('/sumbawa', function () {
    return view('sumbawa');
})->name('sumbawa');

Route::get('/sumbawabarat', function () {
    return view('sumbawabarat');
})->name('sumbawabarat');

Route::get('/kotabima', function () {
    return view('kotabima');
})->name('kotabima');

Route::get('/kotamataram', function () {
    return view('kotamataram');
})->name('kotamataram');

Route::get('/alor', function () {
    return view('alor');
})->name('alor');

Route::get('/belu', function () {
    return view('belu');
})->name('belu');

Route::get('/ende', function () {
    return view('ende');
})->name('ende');

Route::get('/florestimur', function () {
    return view('florestimur');
})->name('florestimur');

Route::get('/kupang', function () {
    return view('kupang');
})->name('kupang');

Route::get('/lembata', function () {
    return view('lembata');
})->name('lembata');

Route::get('/malaka', function () {
    return view('malaka');
})->name('malaka');

Route::get('/manggarai', function () {
    return view('manggarai');
})->name('manggarai');

Route::get('/manggaraibarat', function () {
    return view('manggaraibarat');
})->name('manggaraibarat');

Route::get('/manggaraitimur', function () {
    return view('manggaraitimur');
})->name('manggaraitimur');

Route::get('/ngada', function () {
    return view('ngada');
})->name('ngada');

Route::get('/nagekeo', function () {
    return view('nagekeo');
})->name('nagekeo');

Route::get('/rotendao', function () {
    return view('rotendao');
})->name('rotendao');

Route::get('/saburaijoa', function () {
    return view('saburaijoa');
})->name('saburaijoa');

Route::get('/sikka', function () {
    return view('sikka');
})->name('sikka');

Route::get('/sumbabarat', function () {
    return view('sumbabarat');
})->name('sumbabarat');

Route::get('/sumbatengah', function () {
    return view('sumbatengah');
})->name('sumbatengah');

Route::get('/sumbatimur', function () {
    return view('sumbatimur');
})->name('sumbatimur');

Route::get('/timortengahselatan', function () {
    return view('timortengahselatan');
})->name('timortengahselatan');

Route::get('/timortengahutara', function () {
    return view('timortengahutara');
})->name('timortengahutara');

Route::get('/kotakupang', function () {
    return view('kotakupang');
})->name('kotakupang');

Route::get('/bengkayang', function () {
    return view('bengkayang');
})->name('bengkayang');

Route::get('/kapuashalu', function () {
    return view('kapuashalu');
})->name('kapuashalu');

Route::get('/hulu', function () {
    return view('hulu');
})->name('hulu');

Route::get('/kayongutara', function () {
    return view('kayongutara');
})->name('kayongutara');

Route::get('/ketapang', function () {
    return view('ketapang');
})->name('ketapang');

Route::get('/kuburaya', function () {
    return view('kuburaya');
})->name('kuburaya');

Route::get('/landak', function () {
    return view('landak');
})->name('landak');

Route::get('/melawi', function () {
    return view('melawi');
})->name('melawi');

Route::get('/mempawah', function () {
    return view('mempawah');
})->name('mempawah');

Route::get('/sambas', function () {
    return view('sambas');
})->name('sambas');

Route::get('/sanggau', function () {
    return view('sanggau');
})->name('sanggau');

Route::get('/sekadau', function () {
    return view('sekadau');
})->name('sekadau');

Route::get('/sintang', function () {
    return view('sintang');
})->name('sintang');

Route::get('/kotapontianak', function () {
    return view('kotapontianak');
})->name('kotapontianak');

Route::get('/kotasingkawang', function () {
    return view('kotasingkawang');
})->name('kotasingkawang');

Route::get('/kotasawahlunto', function () {
    return view('kotasawahlunto');
})->name('kotasawahlunto');

Route::get('/kotasolok', function () {
    return view('kotasolok');
})->name('kotasolok');

Route::get('/kotakupang', function () {
    return view('kotakupang');
})->name('kotakupang');

Route::get('/balangan', function () {
    return view('balangan');
})->name('balangan');

Route::get('/banjar', function () {
    return view('banjar');
})->name('banjar');

Route::get('/baritokuala', function () {
    return view('baritokuala');
})->name('baritokuala');

Route::get('/hulusungaiselatan', function () {
    return view('hulusungaiselatan');
})->name('hulusungaiselatan');

Route::get('/hulusungaitengah', function () {
    return view('hulusungaitengah');
})->name('hulusungaitengah');

Route::get('/hulusungaiutara', function () {
    return view('hulusungaiutara');
})->name('hulusungaiutara');

Route::get('/kotabaru', function () {
    return view('kotabaru');
})->name('kotabaru');

Route::get('/tabalog', function () {
    return view('tabalog');
})->name('tabalog');

Route::get('/tanahbumbu', function () {
    return view('tanahbumbu');
})->name('tanahbumbu');

Route::get('/tanahlaut', function () {
    return view('tanahlaut');
})->name('tanahlaut');

Route::get('/tapin', function () {
    return view('tapin');
})->name('tapin');

Route::get('/banjarbaru', function () {
    return view('banjarbaru');
})->name('banjarbaru');

Route::get('/banjarmasin', function () {
    return view('banjarmasin');
})->name('banjarmasin');

Route::get('/kotakupang', function () {
    return view('kotakupang');
})->name('kotakupang');

Route::get('/baritoselatan', function () {
    return view('baritoselatan');
})->name('baritoselatan');

Route::get('/baritotimur', function () {
    return view('baritotimur');
})->name('baritotimur');

Route::get('/baritoutara', function () {
    return view('baritoutara');
})->name('baritoutara');

Route::get('/gunungmas', function () {
    return view('gunungmas');
})->name('gunungmas');

Route::get('/kapuas', function () {
    return view('kapuas');
})->name('kapuas');

Route::get('/katingan', function () {
    return view('katingan');
})->name('katingan');

Route::get('/kotawaringinbarat', function () {
    return view('kotawaringinbarat');
})->name('kotawaringinbarat');

Route::get('/kotawaringintimur', function () {
    return view('kotawaringintimur');
})->name('kotawaringintimur');

Route::get('/lamandu', function () {
    return view('lamandu');
})->name('lamandu');

Route::get('/murungraya', function () {
    return view('murungraya');
})->name('murungraya');

Route::get('/pulangpisau', function () {
    return view('pulangpisau');
})->name('pulangpisau');

Route::get('/sukamara', function () {
    return view('sukamara');
})->name('sukamara');

Route::get('/seruyan', function () {
    return view('seruyan');
})->name('seruyan');

Route::get('/palangkaraya', function () {
    return view('palangkaraya');
})->name('palangkaraya');

Route::get('/barau', function () {
    return view('barau');
})->name('barau');

Route::get('/kutaibarat', function () {
    return view('kutaibarat');
})->name('kutaibarat');

Route::get('/kutaikartenagara', function () {
    return view('kutaikartenagara');
})->name('kutaikartenagara');

Route::get('/kutaitimur', function () {
    return view('kutaitimur');
})->name('kutaitimur');

Route::get('/mahakamhulu', function () {
    return view('mahakamhulu');
})->name('mahakamhulu');

Route::get('/paser', function () {
    return view('paser');
})->name('paser');

Route::get('/penajampaserutara', function () {
    return view('penajampaserutara');
})->name('penajampaserutara');

Route::get('/balikpapan', function () {
    return view('balikpapan');
})->name('balikpapan');

Route::get('/bontang', function () {
    return view('bontang');
})->name('bontang');

Route::get('/samarinda', function () {
    return view('samarinda');
})->name('samarinda');

Route::get('/boalemo', function () {
    return view('boalemo');
})->name('boalemo');

Route::get('/bonebolango', function () {
    return view('bonebolango');
})->name('bonebolango');

Route::get('/kabupatengorontalo', function () {
    return view('kabupatengorontalo');
})->name('kabupatengorontalo');

Route::get('/kabupatengorontaloutara', function () {
    return view('kabupatengorontaloutara');
})->name('kabupatengorontaloutara');

Route::get('/pohuwato', function () {
    return view('pohuwato');
})->name('pohuwato');

Route::get('/kotagorontalo', function () {
    return view('kotagorontalo');
})->name('kotagorontalo');

Route::get('/bulungan', function () {
    return view('bulungan');
})->name('bulungan');

Route::get('/malinau', function () {
    return view('malinau');
})->name('malinau');

Route::get('/nunukan', function () {
    return view('nunukan');
})->name('nunukan');

Route::get('/tanatidung', function () {
    return view('tanatidung');
})->name('tanatidung');

Route::get('/tarakan', function () {
    return view('tarakan');
})->name('tarakan');

Route::get('/bantaeng', function () {
    return view('bantaeng');
})->name('bantaeng');

Route::get('/barru', function () {
    return view('barru');
})->name('barru');

Route::get('/bone', function () {
    return view('bone');
})->name('bone');

Route::get('/bulukumba', function () {
    return view('bulukumba');
})->name('bulukumba');

Route::get('/enrekang', function () {
    return view('enrekang');
})->name('enrekang');

Route::get('/gowa', function () {
    return view('gowa');
})->name('gowa');

Route::get('/jeneponto', function () {
    return view('jeneponto');
})->name('jeneponto');

Route::get('/kepulauanselayar', function () {
    return view('kepulauanselayar');
})->name('kepulauanselayar');

Route::get('/luwu', function () {
    return view('luwu');
})->name('luwu');

Route::get('/luwutimur', function () {
    return view('luwutimur');
})->name('luwutimur');

Route::get('/luwuutara', function () {
    return view('luwuutara');
})->name('luwuutara');

Route::get('/maros', function () {
    return view('maros');
})->name('maros');

Route::get('/pangkajenedankepulauan', function () {
    return view('pangkajenedankepulauan');
})->name('pangkajenedankepulauan');

Route::get('/pinrang', function () {
    return view('pinrang');
})->name('pinrang');

Route::get('/sidenrengrappang', function () {
    return view('sidenrengrappang');
})->name('sidenrengrappang');

Route::get('/sinjai', function () {
    return view('sinjai');
})->name('sinjai');

Route::get('/soppeng', function () {
    return view('soppeng');
})->name('soppeng');

Route::get('/takalar', function () {
    return view('takalar');
})->name('takalar');

Route::get('/tanatoraja', function () {
    return view('tanatoraja');
})->name('tanatoraja');

Route::get('/wajo', function () {
    return view('wajo');
})->name('wajo');

Route::get('/makasar', function () {
    return view('makasar');
})->name('makasar');

Route::get('/palopo', function () {
    return view('palopo');
})->name('palopo');

Route::get('/parepare', function () {
    return view('parepare');
})->name('parepare');

Route::get('/bombana', function () {
    return view('bombana');
})->name('bombana');

Route::get('/buton', function () {
    return view('buton');
})->name('buton');

Route::get('/butonselatan', function () {
    return view('butonselatan');
})->name('butonselatan');

Route::get('/butontengah', function () {
    return view('butontengah');
})->name('butontengah');

Route::get('/butonutara', function () {
    return view('butonutara');
})->name('butonutara');

Route::get('/kolaka', function () {
    return view('kolaka');
})->name('kolaka');

Route::get('/kolakatimur', function () {
    return view('kolakatimur');
})->name('kolakatimur');

Route::get('/kolakautara', function () {
    return view('kolakautara');
})->name('kolakautara');

Route::get('/konawe', function () {
    return view('konawe');
})->name('konawe');

Route::get('/konawekepulauan', function () {
    return view('konawekepulauan');
})->name('konawekepulauan');

Route::get('/konaweselatan', function () {
    return view('konaweselatan');
})->name('konaweselatan');

Route::get('/konaweutara', function () {
    return view('konaweutara');
})->name('konaweutara');

Route::get('/muna', function () {
    return view('muna');
})->name('muna');

Route::get('/munabarat', function () {
    return view('munabarat');
})->name('munabarat');

Route::get('/wakatobi', function () {
    return view('wakatobi');
})->name('wakatobi');

Route::get('/bau-bau', function () {
    return view('bau-bau');
})->name('bau-bau');

Route::get('/kendari', function () {
    return view('kendari');
})->name('kendari');

Route::get('/banggai', function () {
    return view('banggai');
})->name('banggai');

Route::get('/banggaikepulauan', function () {
    return view('banggaikepulauan');
})->name('banggaikepulauan');

Route::get('/banggailaut', function () {
    return view('banggailaut');
})->name('banggailaut');

Route::get('/buol', function () {
    return view('buol');
})->name('buol');

Route::get('/donggala', function () {
    return view('donggala');
})->name('donggala');

Route::get('/morowali', function () {
    return view('morowali');
})->name('morowali');

Route::get('/morowaliutara', function () {
    return view('morowaliutara');
})->name('morowaliutara');

Route::get('/parigimoutong', function () {
    return view('parigimoutong');
})->name('parigimoutong');

Route::get('/poso', function () {
    return view('poso');
})->name('poso');

Route::get('/sigi', function () {
    return view('sigi');
})->name('sigi');

Route::get('/tojouna-una', function () {
    return view('tojouna-una');
})->name('tojouna-una');

Route::get('/toli-toli', function () {
    return view('toli-toli');
})->name('toli-toli');

Route::get('/palu', function () {
    return view('palu');
})->name('palu');

Route::get('/bolaangmongondow', function () {
    return view('bolaangmongondow');
})->name('bolaangmongondow');

Route::get('/bolaangmongondowselatan', function () {
    return view('bolaangmongondowselatan');
})->name('bolaangmongondowselatan');

Route::get('/bolaangmongondowtimur', function () {
    return view('bolaangmongondowtimur');
})->name('bolaangmongondowtimur');

Route::get('/kotabengkulu', function () {
    return view('kotabengkulu');
})->name('kotabengkulu');

Route::get('/kotajambi', function () {
    return view('kotajambi');
})->name('kotajambi');

Route::get('/bolaangmongondowutara', function () {
    return view('bolaangmongondowutara');
})->name('bolaangmongondowutara');

Route::get('/kepulauansangihe', function () {
    return view('kepulauansangihe');
})->name('kepulauansangihe');

Route::get('/siautagulandangbiaro', function () {
    return view('siautagulandangbiaro');
})->name('siautagulandangbiaro');

Route::get('/kepulauantalaud', function () {
    return view('kepulauantalaud');
})->name('kepulauantalaud');

Route::get('/minahasa', function () {
    return view('minahasa');
})->name('minahasa');

Route::get('/minahasaselatan', function () {
    return view('minahasaselatan');
})->name('minahasaselatan');

Route::get('/minahasatenggara', function () {
    return view('minahasatenggara');
})->name('minahasatenggara');

Route::get('/minahasautara', function () {
    return view('minahasautara');
})->name('minahasautara');

Route::get('/bitung', function () {
    return view('bitung');
})->name('bitung');

Route::get('/kotamobugu', function () {
    return view('kotamobugu');
})->name('kotamobugu');

Route::get('/manado', function () {
    return view('manado');
})->name('manado');

Route::get('/tomohon', function () {
    return view('tomohon');
})->name('tomohon');

Route::get('/majene', function () {
    return view('majene');
})->name('majene');

Route::get('/mamasa', function () {
    return view('mamasa');
})->name('mamasa');

Route::get('/mamuju', function () {
    return view('mamuju');
})->name('mamuju');

Route::get('/mamujutengah', function () {
    return view('mamujutengah');
})->name('mamujutengah');

Route::get('/mamujuutara', function () {
    return view('mamujuutara');
})->name('mamujuutara');

Route::get('/polewalimandar', function () {
    return view('polewalimandar');
})->name('polewalimandar');

Route::get('/kotamamuju', function () {
    return view('kotamamuju');
})->name('kotamamuju');

Route::get('/buru', function () {
    return view('buru');
})->name('buru');

Route::get('/buruselatan', function () {
    return view('buruselatan');
})->name('buruselatan');

Route::get('/kepulauanaru', function () {
    return view('kepulauanaru');
})->name('kepulauanaru');

Route::get('/malukubaratdaya', function () {
    return view('malukubaratdaya');
})->name('malukubaratdaya');

Route::get('/malukutengah', function () {
    return view('malukutengah');
})->name('malukutengah');

Route::get('/malukutenggara', function () {
    return view('malukutenggara');
})->name('malukutenggara');

Route::get('/malukutenggarabarat', function () {
    return view('malukutenggarabarat');
})->name('malukutenggarabarat');

Route::get('/serambagianbarat', function () {
    return view('serambagianbarat');
})->name('serambagianbarat');

Route::get('/serambagiantimur', function () {
    return view('serambagiantimur');
})->name('serambagiantimur');

Route::get('/ambon', function () {
    return view('ambon');
})->name('ambon');

Route::get('/tual', function () {
    return view('tual');
})->name('tual');

Route::get('/halmaherabarat', function () {
    return view('halmaherabarat');
})->name('halmaherabarat');

Route::get('/halmaheratengah', function () {
    return view('halmaheratengah');
})->name('halmaheratengah');

Route::get('/halmaherautara', function () {
    return view('halmaherautara');
})->name('halmaherautara');

Route::get('/halmaheraselatan', function () {
    return view('halmaheraselatan');
})->name('halmaheraselatan');

Route::get('/kepulauansula', function () {
    return view('kepulauansula');
})->name('kepulauansula');

Route::get('/halmaheratimur', function () {
    return view('halmaheratimur');
})->name('halmaheratimur');

Route::get('/pulaumorotai', function () {
    return view('pulaumorotai');
})->name('pulaumorotai');

Route::get('/pulautaliabu', function () {
    return view('pulautaliabu');
})->name('pulautaliabu');

Route::get('/ternate', function () {
    return view('ternate');
})->name('ternate');

Route::get('/tidorekepulauan', function () {
    return view('tidorekepulauan');
})->name('tidorekepulauan');

Route::get('/asmat', function () {
    return view('asmat');
})->name('asmat');

Route::get('/biaknumfor', function () {
    return view('biaknumfor');
})->name('biaknumfor');

Route::get('/bovendigoel', function () {
    return view('bovendigoel');
})->name('bovendigoel');

Route::get('/deiyai', function () {
    return view('deiyai');
})->name('deiyai');

Route::get('/dogiyai', function () {
    return view('dogiyai');
})->name('dogiyai');

Route::get('/intanjaya', function () {
    return view('intanjaya');
})->name('intanjaya');

Route::get('/jayapura', function () {
    return view('jayapura');
})->name('jayapura');

Route::get('/jayawijaya', function () {
    return view('jayawijaya');
})->name('jayawijaya');

Route::get('/keerom', function () {
    return view('keerom');
})->name('keerom');

Route::get('/kepulauanyapen', function () {
    return view('kepulauanyapen');
})->name('kepulauanyapen');

Route::get('/lannyjaya', function () {
    return view('lannyjaya');
})->name('lannyjaya');

Route::get('/mamberamoraya', function () {
    return view('mamberanoraya');
})->name('mamberamoraya');

Route::get('/mamberamotengah', function () {
    return view('mamberanotengah');
})->name('mamberamotengah');

Route::get('/mappi', function () {
    return view('mappi');
})->name('mappi');

Route::get('/merauke', function () {
    return view('merauke');
})->name('merauke');

Route::get('/mimika', function () {
    return view('mimika');
})->name('mimika');

Route::get('/nabire', function () {
    return view('nabire');
})->name('nabire');

Route::get('/nduga', function () {
    return view('nduga');
})->name('nduga');

Route::get('/paniai', function () {
    return view('paniai');
})->name('paniai');

Route::get('/pegununganbintang', function () {
    return view('pegununganbintang');
})->name('pegununganbintang');

Route::get('/puncak', function () {
    return view('puncak');
})->name('puncak');

Route::get('/puncakjaya', function () {
    return view('puncakjaya');
})->name('puncakjaya');

Route::get('/sarmi', function () {
    return view('sarmi');
})->name('sarmi');

Route::get('/supiori', function () {
    return view('supiori');
})->name('supiori');

Route::get('/tolikara', function () {
    return view('tolikara');
})->name('tolikara');

Route::get('/waropen', function () {
    return view('waropen');
})->name('waropen');

Route::get('/yahukimo', function () {
    return view('yahukimo');
})->name('yahukimo');

Route::get('/yalimo', function () {
    return view('yalimo');
})->name('yalimo');

Route::get('/kotajayapura', function () {
    return view('kotajayapura');
})->name('kotajayapura');

Route::get('/fakfak', function () {
    return view('fakfak');
})->name('fakfak');

Route::get('/kaimana', function () {
    return view('kaimana');
})->name('kaimana');

Route::get('/manokwari', function () {
    return view('manokwari');
})->name('manokwari');

Route::get('/manokwariselatan', function () {
    return view('manokwariselatan');
})->name('manokwariselatan');

Route::get('/maybrat', function () {
    return view('maybrat');
})->name('maybrat');

Route::get('/pegununganarfak', function () {
    return view('pegununganarfak');
})->name('pegununganarfak');

Route::get('/rajaampat', function () {
    return view('rajaampat');
})->name('rajaampat');

Route::get('/sorong', function () {
    return view('sorong');
})->name('sorong');

Route::get('/sorongselatan', function () {
    return view('sorongselatan');
})->name('sorongselatan');

Route::get('/tambrauw', function () {
    return view('tambrauw');
})->name('tambrauw');

Route::get('/telukbintuni', function () {
    return view('telukbintuni');
})->name('telukbintuni');

Route::get('/telukwondama', function () {
    return view('telukwondama');
})->name('telukwondama');

Route::get('/aronganlembadek', function () {
    return view('aronganlembadek');
})->name('aronganlembadek');

Route::get('/bubon', function () {
    return view('bubon');
})->name('bubon');

Route::get('/johanpahlawan', function () {
    return view('johanpahlawan');
})->name('johanpahlawan');

Route::get('/kawayXVI', function () {
    return view('kawayXVI');
})->name('kawayXVI');

Route::get('/meureubo', function () {
    return view('meureubo');
})->name('meureubo');

Route::get('/panteceureumen', function () {
    return view('panteceureumen');
})->name('panteceureumen');

Route::get('/pantonreu', function () {
    return view('pantonreu');
})->name('pantonreu');

Route::get('/samatiga', function () {
    return view('samatiga');
})->name('samatiga');

Route::get('/sungaimas', function () {
    return view('sungaimas');
})->name('sungaimas');

Route::get('/woyla', function () {
    return view('woyla');
})->name('woyla');

Route::get('/LK', function () {
    return view('LK');
})->name('LK');

Route::get('/bagikan', function () {
    return view('bagikan');
})->name('bagikan');

Route::get('/LK1', function () {
    return view('LK1');
})->name('LK1');

Route::get('/layanan1', function () {
    return view('layanan1');
})->name('layanan1');


/* MANAJEMEN */

Route::get('/layananmanajemen', function () {
    return view('layananmanajemen');
})->name('layananmanajemen');

Route::get('/promosi', function () {
    return view('promosi');
})->name('promosi');

Route::get('/dompetmanajemen', function () {
    return view('dompetmanajemen');
})->name('dompetmanajemen');

Route::get('/profilemanajemen', function () {
    return view('profilemanajemen');
})->name('profilemanajemen');

Route::get('/pembayaran', function () {
    return view('pembayaran');
})->name('pembayaran');

Route::get('/pembayaran2', function () {
    return view('pembayaran2');
})->name('pembayaran2');

/* PROMOSI */

Route::get('/pembayaranpromosi', function () {
    return view('pembayaranpromosi');
})->name('pembayaranpromosi');

Route::get('/dompetpromosi', function () {
    return view('dompetpromosi');
})->name('dompetpromosi');

Route::get('/profilepromosi', function () {
    return view('profilepromosi');
})->name('profilepromosi');

Route::get('/promosi', function () {
    return view('promosi');
})->name('promosi');

/* PERPAJAKAN */

Route::get('/dompetpajak', function () {
    return view('dompetpajak');
})->name('dompetpajak');

Route::get('/profileperpajakan', function () {
    return view('profileperpajakan');
})->name('profileperpajakan');

Route::get('/pembayaranpajak', function () {
    return view('pembayaranpajak');
})->name('pembayaranpajak');

Route::get('/perpajakan', function () {
    return view('perpajakan');
})->name('perpajakan');

/* PRODUCT PROFILE */

Route::get('/profilemakanan', function () {
    return view('profilemakanan');
})->name('profilemakanan');

Route::get('/profileminuman', function () {
    return view('profileminuman');
})->name('profileminuman');

Route::get('/profilejajan', function () {
    return view('profilejajan');
})->name('profilejajan');

Route::get('/profileroti', function () {
    return view('profileroti');
})->name('profileroti');

Route::get('/profiledesain', function () {
    return view('profiledesain');
})->name('profiledesain');

Route::get('/profilebumbu', function () {
    return view('profilebumbu');
})->name('profilebumbu');

/* PRODUCT PEMBAYARAN */

Route::get('/pembayaranmakanan', function () {
    return view('pembayaranmakanan');
})->name('pembayaranmakanan');

Route::get('/pembayaranminuman', function () {
    return view('pembayaranminuman');
})->name('pembayaranminuman');

Route::get('/pembayaranjajan', function () {
    return view('pembayaranjajan');
})->name('pembayaranjajan');

Route::get('/pembayaranroti', function () {
    return view('pembayaranroti');
})->name('pembayaranroti');

Route::get('/pembayarandesain', function () {
    return view('pembayarandesain');
})->name('pembayarandesain');

Route::get('/pembayaranbumbu', function () {
    return view('pembayaranbumbu');
})->name('pembayaranbumbu');

/* PRODUCT DOMPET */

Route::get('/dompetmakanan', function () {
    return view('dompetmakanan');
})->name('dompetmakanan');

Route::get('/dompetminuman', function () {
    return view('dompetminuman');
})->name('dompetminuman');

Route::get('/dompetjajan', function () {
    return view('dompetjajan');
})->name('dompetjajan');

Route::get('/dompetroti', function () {
    return view('dompetroti');
})->name('dompetroti');

Route::get('/dompetdesain', function () {
    return view('dompetdesain');
})->name('dompetdesain');

Route::get('/dompetbumbu', function () {
    return view('dompetbumbu');
})->name('dompetbumbu');

/* BARUUUUUU */

Route::get('/registrasi1', function () {
    return view('registrasi1');
})->name('registrasi1');
Route::get('/login1', function () {
    return view('login1');
})->name('login1');
Route::get('/aturulang', function () {
    return view('aturulang');
});
Route::get('/ubah', function () {
    return view('ubahsandi');
});
Route::get('/profil', function () {
    return view('profil');
})->name('profil');
Route::get('/layanan', function () {
    return view('layanan');
})->name('layanan');
Route::get('/awal', function () {
    return view('awal');
})->name('awal');
Route::get('/awal1', function () {
    return view('awal1');
})->name('awal1');
Route::get('/setelan', function () {
    return view('setelan');
})->name('setel');
Route::get('/layanan1', function () {
    return view('layanan1');
})->name('layanan1');
Route::get('/bahan', function () {
    return view('bahan');
})->name('bahan');
Route::get('/daging', function () {
    return view('daging');
})->name('daging');
Route::get('/peralatan', function () {
    return view('peralatan');
})->name('peralatan');
Route::get('/kemasan', function () {
    return view('kemasan');
})->name('kemasan');
Route::get('/sayur', function () {
    return view('sayur');
})->name('sayur');
Route::get('/buah', function () {
    return view('buah');
})->name('buah');
Route::get('/sembako', function () {
    return view('sembako');
})->name('sembako');
Route::get('/ikan', function () {
    return view('ikan');
})->name('ikan');
Route::get('/bumbu', function () {
    return view('bumbu');
})->name('bumbu');
Route::get('/keranjang', function () {
    return view('keranjang');
})->name('keranjang');
Route::get('/layanansdm', function () {
    return view('layanansdm');
})->name('layanansdm');
Route::get('/pekerja', function () {
    return view('pekerja');
})->name('pekerja');
Route::get('/jual', function () {
    return view('jual');
})->name('jual');
Route::get('/tutor', function () {
    return view('tutor');
})->name('tutor');
Route::get('/makanan', function () {
    return view('makanan');
})->name('makanan');
Route::get('/minuman', function () {
    return view('minuman');
})->name('minuman');
Route::get('/roti', function () {
    return view('roti');
})->name('roti');
Route::get('/jajan', function () {
    return view('jajan');
})->name('jajan');
Route::get('/desain', function () {
    return view('desain');
})->name('desain');
Route::get('/trasportasi', function () {
    return view('trasportasi');
})->name('trasportasi');
Route::get('/promosi1', function () {
    return view('promosi1');
})->name('promosi1');
Route::get('/legalitas', function () {
    return view('legalitas');
})->name('legalitas');
Route::get('/manajemen', function () {
    return view('manajemen');
})->name('manajemen');
