<div class="card-body py-md-20">
    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <div class="edit-profile__body ">

        <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
            @csrf
            @method('patch')
            <div class="row">


                <div class="col-md-4 mb-10">
                    <x-text-input id="dateDeConfirmation" name="dateDeConfirmation" type="text" class="form-control"
                                   required autofocus
                                  autocomplete="dateDeConfirmation" placeholder="dateDeConfirmation"/>
                    <x-input-error class="mt-2" :messages="$errors->get('dateDeConfirmation')"/>
                </div>
                <div class="col-md-4 mb-10">
                    <x-text-input id="DateDembauche" name="DateDembauche" type="text" class="form-control"
                                 required autofocus
                                  autocomplete="DateDembauche" placeholder="DateDembauche"/>
                    <x-input-error class="mt-2" :messages="$errors->get('DateDembauche')" />
                </div>


                <div class="col-md-4 mb-10">
                    <x-text-input id="Adresse" name="Adresse" type="text" class="form-control"
                                   autofocus autocomplete="Adresse" placeholder="Adresse"/>
                    <x-input-error class="mt-2" :messages="$errors->get('Adresse')"/>
                </div>      <div class="col-md-4 mb-10">
                    <x-text-input id="NombreDenfants" name="NombreDenfants" type="text" class="form-control"
                                  autofocus autocomplete="NombreDenfants" placeholder="NombreDenfants"/>
                    <x-input-error class="mt-2" :messages="$errors->get('NombreDenfants')"/>
                </div>
 <div class="col-md-4 mb-10">
                    <x-text-input id="NombreDenfantsACharge" name="NombreDenfantsACharge" type="text" class="form-control"
                                  autofocus autocomplete="NombreDenfantsACharge" placeholder="NombreDenfantsACharge"/>
                    <x-input-error class="mt-2" :messages="$errors->get('NombreDenfantsACharge')" />
                </div>
                <div class="col-md-4 mb-10">
                    <x-text-input id="CarteDeSejour" name="CarteDeSejour" type="text" class="form-control"
                                 autofocus autocomplete="CarteDeSejour" placeholder="CarteDeSejour"/>
                    <x-input-error class="mt-2" :messages="$errors->get('CarteDeSejour')" />
                </div>
                <div class="col-md-4 mb-10">
                    <x-text-input id="NumeroDePasseport" name="NumeroDePasseport" type="text" class="form-control"
                                  autofocus autocomplete="NumeroDePasseport" placeholder="NumeroDePasseport"/>
                    <x-input-error class="mt-2" :messages="$errors->get('NumeroDePasseport')" />
                </div> <div class="col-md-4 mb-10">
                    <x-text-input id="Ville" name="Ville" type="text" class="form-control"
                                  autofocus autocomplete="Ville" placeholder="Ville"/>
                    <x-input-error class="mt-2" :messages="$errors->get('Ville')" />
                </div><div class="col-md-4 mb-10">
                    <x-text-input id="Nationalite" name="Nationalite" type="text" class="form-control"
                                   autofocus autocomplete="Nationalite" placeholder="Nationalite"/>
                    <x-input-error class="mt-2" :messages="$errors->get('Nationalite')" />
                </div><div class="col-md-4 mb-10">
                    <x-text-input id="EmailProfessionnel" name="EmailProfessionnel" type="text" class="form-control"
                                   autofocus autocomplete="EmailProfessionnel" placeholder="EmailProfessionnel"/>
                    <x-input-error class="mt-2" :messages="$errors->get('EmailProfessionnel')" />
                </div><div class="col-md-4 mb-10">
                    <x-text-input id="Telephone" name="Telephone" type="text" class="form-control"
                                autofocus autocomplete="Telephone" placeholder="Telephone"/>
                    <x-input-error class="mt-2" :messages="$errors->get('Telephone')"/>
                </div><div class="col-md-4 mb-10">
                    <x-text-input id="DateDeNaissance" name="DateDeNaissance" type="text" class="form-control"
                                  autofocus autocomplete="DateDeNaissance" placeholder="DateDeNaissance"/>
                    <x-input-error class="mt-2" :messages="$errors->get('DateDeNaissance')"/>
                </div><div class="col-md-4 mb-10">
                    <x-text-input id="DateDexpiration" name="DateDexpiration" type="text" class="form-control"
                                   autofocus autocomplete="DateDexpiration" placeholder="DateDexpiration"/>
                    <x-input-error class="mt-2" :messages="$errors->get('DateDexpiration')"/>
                </div><div class="col-md-4 mb-10">
                    <x-text-input id="SituationFamiliale" name="SituationFamiliale" type="text" class="form-control"
                                   autofocus autocomplete="SituationFamiliale" placeholder="SituationFamiliale"/>
                    <x-input-error class="mt-2" :messages="$errors->get('SituationFamiliale')"/>
                </div><div class="col-md-4 mb-10">
                    <x-text-input id="SituationFamiliale" name="SituationFamiliale" type="text" class="form-control"
                                   autofocus autocomplete="SituationFamiliale" placeholder="SituationFamiliale"/>
                    <x-input-error class="mt-2" :messages="$errors->get('SituationFamiliale')"/>
                </div>

                <button class="btn btn-primary btn-default btn-squared text-capitalize radius-md shadow2" data-toggle="modal" data-target="#successModal">
                    {{ __('Save') }}
                </button>
                </div>


        </form>


        <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="successModalLabel">Success</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Thank you for updating your information.
                    </div>
                    <div class="modal-footer">
                        <a  href="{{ route('logout') }}">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Logout</button></a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script>
    // Automatically close the modal after 2000 milliseconds (2 seconds)
    $(document).ready(function () {
        setTimeout(function () {
            $('#successModal').modal('hide');
        }, 2000);
    });
</script>
