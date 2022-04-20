@if($errors->has($campo))
    <section class="row erro bg-danger text-center d-flex mt-1 p-1 rounded">
        <div>
            <i class="bi bi-x-circle-fill mx-1"></i>
        </div>
        <div class="text-white fw-bold fs-6" id="Error-Text">
            {{$errors->first($campo)}}
        </div>
    </section>     
@endif      

  
