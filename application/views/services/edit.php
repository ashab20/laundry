<div class="step_wrapper">
    <div class="bg-white p-4 rounded-2">
        <div class="card-body">
            <?= form_open() ?>
            <div class="form-row">
                <div class="form-group col-6">
                    <label for="name">Name:</label>
                    <input class="form-control" type="text" placeholder="Name of service" name="name" id="name" onkeyup="checkContact(this)" value="<?=$data[0]->name ?>" />
                    <small class="form-text text-danger" id="text"><?= form_error('contact'); ?></small>
                    <!-- value="<?= set_value('name') ?>" -->
                </div>
                <div class="form-group col-3">
                    <label for="">Rate:</label>
                    <input class="form-control" value="<?=$data[0]->price ?>" type="number" placeholder="Rate" name="price" id="rate" />
                    <small class="form-text text-danger"><?= form_error('price'); ?></small>
                </div>
                <div class="form-group col-3">
                    <label for="">Role:</label>
                    <select name="role" id="" class="form-control">
                        <option value="<?= $data[0]->role ?>"><?= $data[0]->role ?></option>
                        <option value="LAUNDRY">Laundry</option>
                        <option value="TAILOR">Tailor</option>
                    </select>
                    <small class="form-text text-danger"><?= form_error('price'); ?></small>
                </div>

            </div>
            <div class="form-group button">
                <button class="create-workspace btn-sm btn-primary  mt-3" type="submit">Update</button>
            </div>

            </form>
        </div>
    </div>

</div>