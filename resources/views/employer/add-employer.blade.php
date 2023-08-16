@extends('layouts.master')
@section('content')

    <div class="page-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Add employer</h3>
                        <ul class="breadcrumb" style="float:right;">
                            <li class="breadcrumb-item"><a href="{{ route('employer/add/page') }}">employer</a></li>
                            <li class="breadcrumb-item active">Add employer</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>




    {{-- message --}}

    <div class="row">
        <div class="col-sm-12">
            <div class="card comman-shadow" style="margin-top:-60px">
                <div class="card-body">
                    <form action="{{ route('employer/add/save') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <h5 class="form-title employer-info">employer Information
                                    <span>
                                                <a href="javascript:"><i class="feather-more-vertical"></i></a>
                                            </span>
                                </h5>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms" style="margin-bottom:13px">
                                    <label> Nom <span class="text-danger">*</span></label>
                                    <label>
                                        <input type="text" class="form-control @error('Nom') is-invalid @enderror"
                                               name="Nom" placeholder="Enter First Name" value="{{ old('Nom') }}">
                                    </label>
                                    @error('Nom')
                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Prenom <span class="text-danger">*</span></label>
                                    <label>
                                        <input type="text" class="form-control @error('Prenom') is-invalid @enderror"
                                               name="Prenom" placeholder="Enter Last Name" value="{{ old('Prenom') }}">
                                    </label>
                                    @error('Prenom')
                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Telephone <span class="text-danger">*</span></label>
                                    <label>
                                        <input class="form-control @error('Telephone') is-invalid @enderror" type="text"
                                               oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');"
                                               name="Telephone" placeholder="Enter Phone Number"
                                               value="{{ old('Telephone') }}">
                                    </label>
                                    @error('Telephone')
                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms calendar-icon" style="margin-bottom:13px">
                                    <label>DateDeNaissance<span class="text-danger">*</span></label>
                                    <label>
                                        <input
                                            class="form-control datetimepicker @error('DateDeNaissance') is-invalid @enderror"
                                            name="DateDeNaissance" type="text" placeholder="DD-MM-YYYY"
                                            value="{{ old('DateDeNaissance') }}">
                                    </label>
                                    @error('DateDeNaissance')
                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>EmailProfessionnel <span class="text-danger">*</span></label>
                                    <label>
                                        <input class="form-control @error('EmailProfessionnel') is-invalid @enderror"
                                               type="text" name="EmailProfessionnel" placeholder="Enter EmailProfessionnel"
                                               value="{{ old('EmailProfessionnel') }}">
                                    </label>
                                    @error('EmailProfessionnel')
                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>EmailPersonnel <span class="text-danger">*</span></label>
                                    <label>
                                        <input type="text"
                                               class="form-control @error('EmailPersonnel') is-invalid @enderror"
                                               name="EmailPersonnel" placeholder="Enter EmailPersonnel"
                                               value="{{ old('EmailPersonnel') }}">
                                    </label>
                                    @error('EmailPersonnel')
                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms" style="margin-bottom:13px">
                                    <label>Nationalite <span class="text-danger">*</span></label>

                                    <select class="js-select form-select" @error('Nationalite') is-invalid @enderror"
                                    name="TypeDeContrat" autocomplete="off" data-hs-tom-select-options='{
                                    "searchInDropdown": false,
                                    "hideSearch": true,
                                    "dropdownWidth": "8rem"
                                    }'>
                                    <option selected disabled>Select Nationalite</option>
                                    <option
                                        value="American" {{ old('Nationalite') == 'American' ? "selected" : "" }}>
                                        American
                                    </option>
                                    <option
                                        value="British" {{ old('Nationalite') == 'British' ? "selected" : "" }}>
                                        British
                                    </option>
                                    <option
                                        value="Canadian" {{ old('Nationalite') == 'Canadian' ? "selected" : "" }}>
                                        Canadian
                                    </option>
                                    <option
                                        value="French" {{ old('Nationalite') == 'French' ? "selected" : "" }}>
                                        French
                                    </option>
                                    <option
                                        value="German" {{ old('Nationalite') == 'German' ? "selected" : "" }}>
                                        German
                                    </option>
                                    <option
                                        value="Indian" {{ old('Nationalite') == 'Indian' ? "selected" : "" }}>
                                        Indian
                                    </option>
                                    <option
                                        value="Japanese" {{ old('Nationalite') == 'Maroc' ? "selected" : "" }}>
                                        Maroc
                                    </option>
                                    <option
                                        value="Chinese" {{ old('Nationalite') == 'Chinese' ? "selected" : "" }}>
                                        Chinese
                                    </option>
                                    <option
                                        value="Brazilian" {{ old('Nationalite') == 'Brazilian' ? "selected" : "" }}>
                                        Brazilian
                                    </option>
                                    </select>
                                    @error('Nationalite')
                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                                </div>
                            </div>


                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms" >
                                        <label>Adresse <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('Adresse') is-invalid @enderror"
                                               name="Adresse" placeholder="Enter Adresse" value="{{ old('Adresse') }}">
                                        @error('Adresse')
                                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Ville <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('Ville') is-invalid @enderror"
                                               name="Ville" placeholder="Enter Ville" value="{{ old('Ville') }}">
                                        @error('Ville')
                                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Cin <span class="text-danger">*</span></label>
                                        <input class="form-control @error('Cin') is-invalid @enderror" type="text"
                                               name="Cin" placeholder="Enter Cin" value="{{ old('Cin') }}">
                                        @error('Cin')
                                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms calendar-icon" style="margin-bottom:13px">
                                        <label>DateDexpiration <span class="text-danger">*</span></label>
                                        <input
                                            class="form-control datetimepicker @error('DateDexpiration') is-invalid @enderror"
                                            type="text" name="DateDexpiration" placeholder="Enter Email Address"
                                            value="{{ old('DateDexpiration') }}">
                                        @error('DateDexpiration')
                                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label> SituationFamiliale <span class="text-danger">*</span></label>
                                        <input class="form-control @error('SituationFamiliale') is-invalid @enderror"
                                               type="text" name="SituationFamiliale" placeholder="Enter Admission ID"
                                               value="{{ old('SituationFamiliale') }}">
                                        @error('SituationFamiliale')
                                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label> NombreDenfants <span class="text-danger">*</span></label>
                                        <input class="form-control @error('NombreDenfants') is-invalid @enderror"
                                               type="text"
                                               oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');"
                                               name="NombreDenfants" placeholder="Enter le Nombre"
                                               value="{{ old('NombreDenfants') }}">
                                        @error('NombreDenfants')
                                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms" style="margin-bottom:13px">
                                        <label> NombreDenfantsACharge <span class="text-danger">*</span></label>
                                        <input class="form-control @error('NombreDenfantsACharge') is-invalid @enderror"
                                               type="text"
                                               oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');"
                                               name="NombreDenfantsACharge" placeholder="Enter le Nombre"
                                               value="{{ old('NombreDenfantsACharge') }}">
                                        @error('NombreDenfantsACharge')
                                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label> CarteDeSejour <span class="text-danger">*</span></label>
                                        <input class="form-control @error('CarteDeSejour') is-invalid @enderror"
                                               type="text" name="CarteDeSejour" placeholder="Enter Admission ID"
                                               value="{{ old('CarteDeSejour') }}">
                                        @error('CarteDeSejour')
                                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms" style="margin-bottom:13px">
                                        <label> NumeroDePasseport </label>
                                        <input class="form-control @error('NumeroDePasseport') is-invalid @enderror"
                                               type="text" name="NumeroDePasseport"
                                               placeholder="Enter le numero Passeport"
                                               value="{{ old('NumeroDePasseport') }}">
                                        @error('NumeroDePasseport')
                                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms calendar-icon">
                                        <label>DateDexpiration</label>
                                        <input
                                            class="form-control datetimepicker @error('DateDexpiration') is-invalid @enderror"
                                            name="DateDexpiration" type="text" placeholder="DD-MM-YYYY"
                                            value="{{ old('DateDexpiration') }}">
                                        @error('DateDexpiration')
                                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label> Profession <span class="text-danger">*</span></label>
                                        <input class="form-control @error('Profession') is-invalid @enderror"
                                               type="text" name="Profession" placeholder="Enter le Profession"
                                               value="{{ old('Profession') }}">
                                        @error('Profession')
                                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label> SalaireNet<span class="text-danger">*</span> </label>
                                        <input class="form-control @error('SalaireNet') is-invalid @enderror"
                                               type="text" name="SalaireNet" placeholder="Enter le salaireNet"
                                               value="{{ old('SalaireNet') }}">
                                        @error('SalaireNet')
                                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms" style="margin-bottom:13px">
                                        <label> SalaireBrut <span class="text-danger">*</span></label>
                                        <input class="form-control @error('SalaireBrut') is-invalid @enderror"
                                               type="text" name="SalaireBrut" placeholder="Enter le salireBrut"
                                               value="{{ old('SalaireBrut') }}">
                                        @error('SalaireBrut')
                                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>TypeDeContrat <span class="text-danger">*</span></label>

                                            <select class="js-select form-select" @error('TypeDeContrat') is-invalid @enderror"
                                            name="TypeDeContrat" autocomplete="off" data-hs-tom-select-options='{
                                    "searchInDropdown": false,
                                    "hideSearch": true,
                                    "dropdownWidth": "8rem"
                                  }'>
                                            <option selected disabled> Select TypeDeContrat</option>
                                            <option value="CDI" {{ old('TypeDeContrat') == 'CDI' ? "selected" :""}}>CDI
                                            </option>
                                            <option value="CDD" {{ old('TypeDeContrat') == 'CDD' ? "selected" :""}}>CDD
                                            </option>
                                            <option value="CTT" {{ old('TypeDeContrat') == 'CTT' ? "selected" :""}}>CTT
                                            </option>
                                        </select>
                                        @error('TypeDeContrat')
                                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms calendar-icon">
                                        <label>DateDembauche<span class="text-danger">*</span></label>
                                        <input
                                            class="form-control datetimepicker @error('DateDembauche') is-invalid @enderror"
                                            name="DateDembauche" type="text" placeholder="DD-MM-YYYY"
                                            value="{{ old('DateDembauche') }}">
                                        @error('DateDembauche')
                                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms calendar-icon">
                                        <label>PeriodeDeStage<span class="text-danger">*</span></label>
                                        <input class="form-control  @error('PeriodeDeStage') is-invalid @enderror"
                                               name="PeriodeDeStage" type="text" placeholder="DD-MM-YYYY"
                                               value="{{ old('PeriodeDeStage') }}">
                                        @error('PeriodeDeStage')
                                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms calendar-icon" style="margin-bottom:13px">
                                        <label>dateDeConfirmation<span class="text-danger">*</span></label>
                                        <input class="form-control @error('dateDeConfirmation') is-invalid @enderror"
                                               name="dateDeConfirmation" type="text" placeholder="DD-MM-YYYY"
                                               value="{{ old('dateDeConfirmation') }}">
                                        @error('dateDeConfirmation')
                                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="col-12 col-sm-4">
                                    <div class="form-group employers-up-files">
                                        <label>Upload employer Photo (150px X 150px)</label>
                                        <div class="uplod">
                                            <label
                                                class="file-upload image-upbtn mb-0 @error('upload') is-invalid @enderror">
                                                Choose File <input type="file" name="upload">
                                            </label>
                                            @error('upload')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="employer-submit" style="margin-top:26px">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

@endsection
