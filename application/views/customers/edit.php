<div class="step_wrapper">
    <div class="bg-white p-4 rounded-2">
        <?php 
        ?>
        <div class="card-body">
            <?= form_open() ?>
            <div class="form-row">
                <div class="form-group col-6">
                    <label for="">Phone:</label>
                    <input class="form-control" type="text" placeholder="Phone" name="contact" id="contact"  value="<?=$data[0]->contact ?>" onkeyup="checkContact(this)" />
                    <small class="form-text text-danger" id="text"><?= form_error('contact'); ?></small>
                    <!-- value="<?= set_value('contact') ?>" -->
                </div>
                <div class="form-group col-6">
                    <label for="">Name:</label>
                    <input class="form-control" type="text" placeholder="Name" name="name" id="name"  value="<?=$data[0]->name ?>" />
                    <small class="form-text text-danger"><?= form_error('name'); ?></small>
                    <!-- value="<?= set_value('name') ?>" -->
                </div>

            </div>
            <div class="form-row">
                <label for="">Address:</label>
                <div class="form-group col-12">
                    <textarea name="address" id="address" class="form-control" rows="2">
                    <?=$data[0]->address ?>
                  </textarea>
                    <small id="address" class="form-text text-danger"><?= form_error('address'); ?></small>
                </div>
                <!-- valus="<?= set_value('address') ?>" -->
            </div>
            <div class="form-group button">
                <button class="create-workspace btn btn-primary btn-block mt-3" type="submit">Update</button>
            </div>

            </form>
        </div>
    </div>

</div>