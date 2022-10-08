<div class="container" data-layout="container">
    <div class="row flex-center mt-5 py-2">
        <div class="col-sm-10 col-md-8 ">
            <div class="card">
                <div class="card-body p-4 p-sm-5">
                    <div class="row text-left justify-content-between align-items-center mb-2">
                        <div class="col-auto">
                            <h5> Add Customer</h5>
                        </div>
                        <div class="col-auto">

                        </div>
                    </div>
                    <span>
                        <?php if ($this->session->flashdata('msg')) {
                            echo $this->session->flashdata('msg');
                        } ?>
                    </span>
                    <?= form_open() ?>
                    <div class="form-row">
                        <div class="form-group col-6">
                            <input class="form-control" type="text" placeholder="Name" name="name" value="<?= set_value('name') ?>" />
                            <small id="name" class="form-text text-danger"><?= form_error('name'); ?></small>
                        </div>
                        <div class="form-group col-6">
                            <input class="form-control" type="number" placeholder="Phone" name="contact" value="<?= set_value('contact') ?>" />
                            <small id="name" class="form-text text-danger"><?= form_error('contact'); ?></small>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-12">
                            <textarea name="address" id="address" class="form-control" rows="2" placeholder="Address:" valus="  <?= set_value('address') ?>">

                  </textarea>
                            <small id="name" class="form-text text-danger"><?= form_error('address'); ?></small>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-block mt-3" type="submit">Create</button>
                    </div>
                    <div class="button">
                        <button class="create-workspace">Create Workspace</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>