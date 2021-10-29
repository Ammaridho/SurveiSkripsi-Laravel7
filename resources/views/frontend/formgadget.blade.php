<html>
<h4 class="text-center">Data Gadget</h4>
{{-- banyak penghuni --}}
@for ($i = 0; $i < $jmlpenghuni; $i++)

    <div class="form-row">
      <h5>{{$i+1}}. Nama : {{$nama[$i]}}</h5>
    </div>

    {{-- banyak gadget --}}
    @for ($j = 0; $j < $jmlgadget[$i]; $j++)
      

    <div class="form-row">
      <div class="form-group col-4">
        <label for="namaGadget">Gadget</label>
        <input type="text" class="form-control" id="namaGadget" name="namaGadget{{$i.$j}}" placeholder="Hp/Laptop/Tv.." required>
      </div>
      <div class="form-group col-8">
        <label for="penggunaan">Penggunaan</label>

        <div id="penggunaan" class="btn-group btn-group-toggle" data-toggle="buttons" required>
          <label class="btn btn-secondary">
            <input type="radio" name="range{{$i.$j}}" id="range" value="ringan" required> Ringan
          </label>
          <label class="btn btn-secondary">
            <input type="radio" name="range{{$i.$j}}" id="range" value="sedang" required> Sedang
          </label>
          <label class="btn btn-secondary">
            <input type="radio" name="range{{$i.$j}}" id="range" value="berat" required> Berat
          </label>
        </div>
        
      </div>
    </div>

    @endfor 
@endfor    

</html>
  