<div class="modal fade" id="edit">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">EDIT: <span class="del_customer_name"></span></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="booking_edit_save.php" method="POST">
            <div class="modal-body">
                <input type="hidden" class="cust_id" name="ID">   <!--zobrazí id, místo type="text" dám "hidden" id nepůjde vidět-->

                <div class="col-md-12"> <!--editace jména, příjmnení, telefonu,...-->
                    <div class="form-group">
                        <label for=""> FIRST NAME </label>
                        <input type="text" class="form-control" id="edit_firstname" name="FIRSTNAME" required>
                    </div>
                </div>
            

                <div class="col-md-12"> <!--editace jména, příjmnení, telefonu,...-->
                    <div class="form-group">
                        <label for=""> LAST NAME </label>
                        <input type="text" class="form-control" id="edit_lastname" name="LASTNAME" required>
                    </div>
                </div>

                <div class="col-md-12"> <!--editace jména, příjmnení, telefonu,...-->
                    <div class="form-group">
                        <label for=""> MOBILE PHOHE </label>
                        <input type="text" class="form-control" id="edit_phone" name="PHONE" required>
                    </div>
                </div>

                <div class="col-md-12"> <!--editace jména, příjmnení, telefonu,...-->
                    <div class="form-group">
                        <label for=""> EMAIL </label>
                        <input type="text" class="form-control" id="edit_email" name="EMAIL" required>
                    </div>
                </div>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="submit">Save Changes</button>
            </div>
            </form>
        </div>
    </div>

</div>

<!--fungování delete tlaačítka-->

<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title"> Prosím potvrďte</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="booking_delete_record.php" method="POST"> <!--------------->
                    <input type="hidden" class="cust_id" name="ID">
                    
                    <p>Chceš to opravdu smazat?</p>
                    ID: <span class="customer_id"></span><br>
                    Jméno: <span class="del_customer_name"></span>
                    
            </div>
            <div class="modal-footer">  <!---potvrzení na smazání-->
                <button type="button" class=" btn btn-warning" data-dismiss="modal"><i class="fa fa-window-close"></i> Ne</button>
                <button type="submit" name="submit" class=" btn btn-danger"> Ano</button>
            </div>
            </form>
        </div>
    </div>
        
        
        
</div>

<!--fungování VIEW tlačítka-->
<div class="modal fade" id="info">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title"><span class="fa fa-info-cicle"></span> Informace</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h3 class="media-hedling"> <span class="del_customer_name"></span></h3>
                <hr>
                
                    <p class="text-left"><strong>Jméno: </strong><br>
                        <span class="edit_fname text-left"></span>
                    </p>
                    <p class="text-left"><strong>Příjmnení: </strong><br>   <!-- nebo bez br-->
                        <span class="edit_lname text-left"></span>
                    </p>
                    <p class="text-left"><strong>Telefon: </strong><br>
                        <span class="edit_number text-left"></span>
                    </p>
                    <p class="text-left"><strong>Email: </strong><br>
                        <span class="edit_email_address text-left"></span>  
                    </p>
                
                    
            </div>
            <div class="modal-footer">  <!---potvrzení na smazání-->
                <button type="button" class=" btn btn-warning" data-dismiss="modal"><i class="fa fa-window-close"></i> Zavřít</button>
                
            </div>
            
        </div>
    </div>
        
        
        
</div>
