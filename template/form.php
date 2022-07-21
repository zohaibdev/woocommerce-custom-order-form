<h2>Create Order</h2>
<div class="form-block">
    <div class="field-group">
        <div class="row">
            <div class="col-md-6">
                <h4 class="fl-title">Pickup Details</h4>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="field">
                            <label for="bl_first_name">First Name <em>*</em></label>
                            <input type="text" class="input-field" name="order[billing][first_name]" id="bl_first_name">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="field">
                            <label for="bl_last_name">Last Name <em>*</em></label>
                            <input type="text" class="input-field" name="order[billing][last_name]" id="bl_last_name">
                        </div>
                    </div>
                </div>
                <div class="field">
                    <label for="bl_email">Email <em>*</em></label>
                    <input type="text" class="input-field" name="order[billing][email]" id="bl_email">
                </div>
                <div class="field">
                    <label for="bl_phone">Phone <em>*</em></label>
                    <input type="text" class="input-field no-only" name="order[billing][phone]" id="bl_phone">
                </div>
                <div class="field">
                    <label for="bl_address_1">Address line 1 <em>*</em></label>
                    <input type="text" class="input-field" name="order[billing][address_1]" id="bl_address_1">
                </div>
                <div class="field">
                    <label for="bl_address_2">Address line 2</label>
                    <input type="text" class="input-field" name="order[billing][address_2]" id="bl_address_2">
                </div>
                <div class="row">
                    <div class="col-sm-7">
                        <div class="field">
                            <label for="bl_city">City <em>*</em></label>
                            <input type="text" class="input-field" name="order[billing][city]" id="bl_city">
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="field">
                            <label for="bl_postcode">Postcode <em>*</em></label>
                            <input type="text" class="input-field no-only" name="order[billing][postcode]" id="bl_postcode">
                        </div>
                    </div>
                </div>
                <div class="field">
                    <label for="bl_state">State <em>*</em></label>
                    <select class="input-field" name="order[shipping][billing_state]" id="state">
                        <option value="Azad Kashmir">Azad Kashmir</option>
                        <option value="Balochistan">Balochistan</option>
                        <option value="FATA">FATA</option>
                        <option value="Gilgit Baltistan">Gilgit Baltistan</option>
                        <option value="Islamabad Capital Territory">Islamabad Capital Territory</option>
                        <option value="Khyber Pakhtunkhwa">Khyber Pakhtunkhwa</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Sindh">Sindh</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <h4 class="fl-title">Delivery Details</h4>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="field">
                            <label for="sh_first_name">First Name <em>*</em></label>
                            <input type="text" class="input-field" name="order[shipping][first_name]" id="sh_first_name">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="field">
                            <label for="sh_last_name">Last Name <em>*</em></label>
                            <input type="text" class="input-field" name="order[shipping][last_name]" id="sh_last_name">
                        </div>
                    </div>
                </div>
                <div class="field">
                    <label for="sh_email">Email <em>*</em></label>
                    <input type="text" class="input-field" name="order[shipping][email]" id="sh_email">
                </div>
                <div class="field">
                    <label for="sh_phone">Phone <em>*</em></label>
                    <input type="text" class="input-field no-only" name="order[shipping][phone]" id="sh_phone">
                </div>
                <div class="field">
                    <label for="sh_address_1">Address line 1 <em>*</em></label>
                    <input type="text" class="input-field" name="order[shipping][address_1]" id="sh_address_1">
                </div>
                <div class="field">
                    <label for="sh_address_2">Address line 2</label>
                    <input type="text" class="input-field" name="order[shipping][address_2]" id="sh_address_2">
                </div>
                <div class="row">
                    <div class="col-sm-7">
                        <div class="field">
                            <label for="sh_city">City <em>*</em></label>
                            <input type="text" class="input-field" name="order[shipping][city]" id="sh_city">
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="field">
                            <label for="sh_postcode">Postcode <em>*</em></label>
                            <input type="text" class="input-field no-only" name="order[shipping][postcode]" id="sh_postcode">
                        </div>
                    </div>
                </div>
                <div class="field">
                    <label for="sh_state">State <em>*</em></label>
                    <select class="input-field" name="order[shipping][billing_state]" id="state">
                        <option value="Azad Kashmir">Azad Kashmir</option>
                        <option value="Balochistan">Balochistan</option>
                        <option value="FATA">FATA</option>
                        <option value="Gilgit Baltistan">Gilgit Baltistan</option>
                        <option value="Islamabad Capital Territory">Islamabad Capital Territory</option>
                        <option value="Khyber Pakhtunkhwa">Khyber Pakhtunkhwa</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Sindh">Sindh</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="field-group">
        <h4 class="fl-title">Item Details</h4>
        <div class="row">
            <div class="col-md-6">
                <div class="field">
                    <label for="pr_detail">Item Details <em>*</em></label>
                    <textarea name="order[product][detail]" class="input-field" id="pr_detail" rows="5"></textarea>
                </div>
                <div class="field">
                    <label for="pr_instruction">Specific Instruction</label>
                    <textarea name="order[product][instruction]" class="input-field" id="pr_instruction" rows="5"></textarea>
                </div>
                <div class="field">
                    <label for="pr_declared_value">Declared Value</label>
                    <input type="text" class="input-field  no-only" name="order[product][declared_value]" id="pr_declared_value">
                </div>
                <div class="field">
                    <label for="pr_pieces">No. of Pieces <em>*</em></label>
                    <input type="text" class="input-field  no-only" name="order[product][pieces]" id="pr_pieces">
                </div>
                <div class="field">
                    <label for="pr_flyers">No. of Flyers <em>*</em></label>
                    <input type="text" class="input-field  no-only" name="order[product][flyers]" id="pr_flyers">
                </div>
            </div>
            <div class="col-md-6">
                <div class="field">
                    <label for="pr_rf">Refernce No.</label>
                    <input type="text" class="input-field  no-only" name="order[product][refernce]" id="pr_rf">
                </div>
                <div class="field">
                    <label for="pr_weight">Weight <em>*</em></label>
                    <input type="text" class="input-field  no-only" name="order[product][weight]" id="pr_weight">
                </div>
                <div class="field">
                    <label for="pr_amount">Amount <em>*</em></label>
                    <input type="text" class="input-field  no-only" name="order[product][amount]" id="pr_amount">
                </div>
                <div class="field">
                    <label for="pr_weight">Dimensions <em>*</em></label>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="field">
                                <input type="text" class="input-field  no-only" name="order[product][length]" placeholder="Length">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="field">
                                <input type="text" class="input-field  no-only" name="order[product][width]" placeholder="Width">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="field">
                                <input type="text" class="input-field  no-only" name="order[product][height]" placeholder="Height">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="field">
                    <label for="pr_charged_weight">Charged Weight</label>
                    <input type="text" class="input-field  no-only" name="order[product][charged_weight]" id="pr_charged_weight">
                </div>
                <div class="field">
                    <label for="pr_devlivery_charges">Delivery Charges (Inc, Tax)</label>
                    <input type="text" class="input-field  no-only" name="order[product][delivery_charges]" id="pr_devlivery_charges">
                </div>
            </div>
        </div>
    </div>
    <button class='btn btn-primary' id="create-order-btn">Submit</button>
</div>