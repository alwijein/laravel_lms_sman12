<label class="form-label" for="selectGuru">Pilih Guru</label>
<select class="form-select" id="selectGuru" name="guru">
    <option disabled selected>Pilih Guru</option>

    @foreach ($teachers as $namaguru)
        <option value="{{$namaguru->id}}" data-mapel="{{$namaguru->kode_pelajaran}}">{{$namaguru->nama_guru}}</option>
    @endforeach
</select>
