@foreach($grades as $grade)
    Predmet: {{$grade->ime_predmeta}}
    <br>
    Ocijena: {{$grade->ocijena}}
    <br>
    Ime profesora: {{$grade->ime_profesora}}
    <br><br>
@endforeach
