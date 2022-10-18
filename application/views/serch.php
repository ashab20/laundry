<div class="step_wrapper">
    <div class="bg-white p-4 rounded-2">
        <div class="card-body">
            <h3>Enter Order Id</h3>
            <?= form_open() ?>
            <div class="form-row">
                <div class="form-group col-6">                    
                    <input class="form-control" type="text" placeholder="Name of service" name="name" id="name" onkeyup="checkContact(this)" />
                    <small class="form-text text-danger" id="text"><?= form_error('contact'); ?></small>
                    <!-- value="<?= set_value('name') ?>" -->
                </div>
                <div class="form-group button">
                    <button class="create-workspace btn-sm btn-primary  mt-3" type="submit">Add</button>
                </div>
            </div>

            </form>
        </div>
    </div>

</div>