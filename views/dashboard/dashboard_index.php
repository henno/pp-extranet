<div class="modal fade" id="modal-add-order" tabindex="-1" aria-labelledby="modal-add-order-label" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-add-order-label">Lisa uus tellimus</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body row">
                <form>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group mb-3">
                                <label for="table-locations" class="form-label">Location</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select location</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="text-required-date" class="form-label">Required date</label>
                                <input type="text" class="form-control" id="text-required-date"
                                       placeholder="YYYY-MM-DD">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur cupiditate eaque
                            perferendis praesentium. Aspernatur debitis ex in maiores modi perferendis perspiciatis
                            quibusdam reprehenderit. Beatae commodi eligendi, facilis labore odio ut!
                        </div>

                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Sulge</button>
                <button type="submit" name="insertdata" class="btn btn-primary">Salvesta</button>
            </div>
        </div>
    </div>
</div>

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-add-order">Uus
    tellimus
</button>

<!-- Date picker -->
<link rel="stylesheet" href="node_modules/@eonasdan/tempus-dominus/dist/css/tempus-dominus.css">
<link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.css">
<script src="node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
<script src="node_modules/@eonasdan/tempus-dominus/dist/js/tempus-dominus.js"></script>

<!-- Vue -->
<script src="https://unpkg.com/vue@3.2.33/dist/vue.global.js"></script>
<script>


    // Initialize datepicker on modal open
    $('#modal-add-order').on('shown.bs.modal', () => {
        new tempusDominus.TempusDominus($('#text-required-date').get(0), {
            localization: {
                dayViewHeaderFormat: {month: 'long', year: '2-digit'},
                locale: 'et',
                startOfTheWeek: 1
            },
            display: {
                viewMode: 'calendar',
                components: {
                    decades: true,
                    year: true,
                    month: true,
                    date: true,
                    hours: false,
                    minutes: false,
                    seconds: false,
                }
            }
        });
    })

    const vue = Vue.createApp({
        data() {
            return {
                locations: [{name: 'Location 1', selected: false}, {name: 'Location 2', selected: true}],
                allLocationsAreSelected: false,

            }
        },
        methods: {
            toggleSelectAllLocations: function () {
                this.allLocationsAreSelected = !this.allLocationsAreSelected
                this.locations.forEach(function (location) {
                    location.selected = vue.allLocationsAreSelected;
                })
            }
        }

    }).mount('#modal-add-order')

</script>