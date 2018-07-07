
# Capstone-Tugboat-Laravel-dev

### Development `Phase 1` update `4`
### July 6, 2018

the app has been refurbished

`new`
* the new base template is `masterTemplate.blade.php`
* added foreign key constraint for `Pier` and `Berth`
* sidebar Maintenance Navigation is now working


`bug fixes` 
- [x] fixed a bug where the search form icon tends to become smaller

`updates`
* identified a bug where the color of theme doesn't change when the color change button is clicked. 

`deletions`
###### Deleted Controllers

- [x] BerthController
- [x] ContractsController
- [x] EmployeeControgitller
- [x] EquipmentsController
- [x] PierController

The Following Controllers has been `deleted` for now, these controllers may cause conflict because of blank foreign key Constraints so it will be deleted for now.

* Almost all models have been removed in order to avoid `missing` foreign constraints it will be `back` later on. 
* AdminLTE has been completely removed from assets `bye`.

### July 4, 2018
###### Maintenance
- tugboat.js are merged with custom.js
- some id's are changed to classes
- Simple Add and Edit views are added
- added 2 html files
    - infoModal.html 
    - viewSummaryModal.html


### Development `Phase 1` update `3`
### June 30, 2018
###### Added 3 Tugboat Maintenance 
- with Add, Edit and Delete(Sweet Alerts) view
- with Detailed and Card View

###### minor bug fix
- fixed a bug where images in edit view are not changed after selecting an image



### Development `Phase 1` update `2`

### June 24, 2018

* Merged JC-Branch to master to obtain new updates
* added the `new` base template `stisla admin`, has been transpose to .blade.php template and is functioning correctly
* added `stisla admin` assets in the public folder 
* `adminLTE`template is now `replaced`

### Development `Phase 1` update `1`

### May 19, 2018

###### Added the following Models: 
- `new` Agreement
- `new` Attachments
- `new` Barge
- `new` Berth
- `new` Company
- `new` ContractList
- `new` DispatchTicket
- `new` Employee
- `new` Equipments
- `new` Goods
- `new` Hauling
- `new` Insurance
- `new` Invoice
- `new` JobSchedule
- `new` Location
- `new` Payments
- `new` Pier
- `new` Position
- `new` PostBillingTicket
- `new` Quotations
- `new` Schedules
- `new` Services
- `new` StandardRates
- `new` Team
- `new` TermsandCondition
- `new` Tugboat
- `new` TugboatAssignment
- `new` TugboatClass
- `new` TugboatEquipments
- `new` TugboatInsurances
- `new` TugboatMainSpecifications
- `new` TugboatSpecifications
- `new` Users
- `new` UserType
- `new` Vessel

* Has a Sample of Create and Read for Berth Maintenance
* Added Admin-LTE for Base Template
* Added Semantic UI for Other Assests 

### Development `Phase 1`

### May 12, 2018
###### Added Controllers for Maintenance Modules
- [x] BerthController
- [x] ContractsController
- [x] EmployeeControgitller
- [x] EquipmentsController
- [x] PierController
- [x] TugboatsController
- [x] WebpagesController

added resources for controllers 


### May 28, 2018
###### Added 3 INITIAL Views
- Create - completed the necessary ui
- Edit - not fully working
- Index - no detailed view



