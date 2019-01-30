    //edit modals
    $('#modal-editdept').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var id     = button.data('id')
        var dept   = button.data('myname')

        var modal = $(this)
        modal.find('.modal-body #id').val(id)
        modal.find('.modal-body .form-control').val(dept)
    });

    $('#modal-editgroup').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var id     = button.data('id')
        var group   = button.data('myname')

        var modal = $(this)
        modal.find('.modal-body #id').val(id)
        modal.find('.modal-body .form-control').val(group)
    });
    

    $('#modal-editevent').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var id     = button.data('id')
        var name   = button.data('myname')
        var date   = button.data('date')

        var modal = $(this)
        modal.find('.modal-body #id').val(id)
        modal.find('.modal-body #name').val(name)
        modal.find('.modal-body #date').val(date)
    });

    $('#modal-editsunsch').on('show.bs.modal', function (event) {
        var button      = $(event.relatedTarget)
        var id          = button.data('id')
        var name        = button.data('myname')
        var datetime    = button.data('date')
        var topic       = button.data('topic')
        var content     = button.data('content')
        var total       = button.data('total')

        var modal = $(this)
        modal.find('.modal-body #id').val(id)
        modal.find('.modal-body #name').val(name)
        modal.find('.modal-body #datetime').val(datetime)
        modal.find('.modal-body #topic').val(topic)
        modal.find('.modal-body #total').val(total)
        modal.find('.modal-body #content').val(content)
    });

    $('#modal-editannounce').on('show.bs.modal', function (event) {
        var button      = $(event.relatedTarget)
        var id          = button.data('id')
        var title       = button.data('title')
        var date        = button.data('date')
        var spoken      = button.data('member')
        var code        = button.data('code')
        var des         = button.data('des')

        var modal = $(this)
        modal.find('.modal-body #id').val(id)
        modal.find('.modal-body #title').val(title)
        modal.find('.modal-body #date').val(date)
        modal.find('.modal-body #spoken').val(spoken)
        modal.find('.modal-body #code').val(code)
        modal.find('.modal-body #des').val(des)
    });

    $('#modal-editvisitor').on('show.bs.modal', function (event) {
        var button      = $(event.relatedTarget)
        var id          = button.data('id')
        var fname       = button.data('fname')
        var lname       = button.data('lname')
        var gender      = button.data('gender')
        var age         = button.data('age')
        var pnum        = button.data('pnum')
        var by          = button.data('by')
        var code        = button.data('code')
        var email       = button.data('email')
        var address     = button.data('address')

        var modal = $(this)
        modal.find('.modal-body #id').val(id)
        modal.find('.modal-body #fname').val(fname)
        modal.find('.modal-body #lname').val(lname)
        modal.find('.modal-body #gender').val(gender)
        modal.find('.modal-body #code').val(code)
        modal.find('.modal-body #age').val(age)
        modal.find('.modal-body #address').val(address)
        modal.find('.modal-body #email').val(email)
        modal.find('.modal-body #pnum').val(pnum)
        modal.find('.modal-body #by').val(by)
    });
    
    $('#modal-editwkact').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var id     = button.data('id')
        var name   = button.data('name')
        var day    = button.data('day')
        var time   = button.data('time')

        var modal = $(this)
        modal.find('.modal-body #id').val(id)
        modal.find('.modal-body #name').val(name)
        modal.find('.modal-body #day').val(day)
        modal.find('.modal-body #time').val(time)
    });

    $('#modal-editoffering').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var id     = button.data('id')
        var amount = button.data('amount')
        var pdate  = button.data('pdate')
        var tcode  = button.data('tcode')
        var mcode  = button.data('mcode')

        var modal = $(this)
        modal.find('.modal-body #id').val(id)
        modal.find('.modal-body #amount').val(amount)
        modal.find('.modal-body #pdate').val(pdate)
        modal.find('.modal-body #tcode').val(tcode)
        modal.find('.modal-body #mcode').val(mcode)
    });

    $('#modal-edittithe').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var id     = button.data('id')
        var amount = button.data('amount')
        var pdate  = button.data('pdate')
        var tcode  = button.data('tcode')
        var mcode  = button.data('mcode')

        var modal = $(this)
        modal.find('.modal-body #id').val(id)
        modal.find('.modal-body #amount').val(amount)
        modal.find('.modal-body #pdate').val(pdate)
        modal.find('.modal-body #tcode').val(tcode)
        modal.find('.modal-body #mcode').val(mcode)
    });

    //edit modal for giving table
    $('#modal-editgiving').on('show.bs.modal',function (e) {
        var id = $(e.relatedTarget).data('id');
        var item = $(e.relatedTarget).data('item');
        var amount = $(e.relatedTarget).data('amount');
        var tcode = $(e.relatedTarget).data('tcode');
        var pdate = $(e.relatedTarget).data('pdate');
        var mcode = $(e.relatedTarget).data('mcode');

        $(e.currentTarget).find('input[id="id"]').val(id);
        $(e.currentTarget).find('input[id="item"]').val(item);
        $(e.currentTarget).find('input[id="amount"]').val(amount);
        $(e.currentTarget).find('input[id="tcode"]').val(tcode);
        $(e.currentTarget).find('input[id="pdate"]').val(pdate);
        $(e.currentTarget).find('input[id="mcode"]').val(mcode);
    });

    //edit modal for member table
     $('#modal-editmember').on('show.bs.modal', function (event) {
        var button      = $(event.relatedTarget)
        var id          = button.data('id')
        var fname       = button.data('fname')
        var lname       = button.data('lname')
        var gender      = button.data('gender')
        var age         = button.data('age')
        var pnum        = button.data('pnum')
        var email       = button.data('email')
        var address     = button.data('address')

        var modal = $(this)
        modal.find('.modal-body #id').val(id)
        modal.find('.modal-body #fname').val(fname)
        modal.find('.modal-body #lname').val(lname)
        modal.find('.modal-body #gender').val(gender)
        modal.find('.modal-body #age').val(age)
        modal.find('.modal-body #address').val(address)
        modal.find('.modal-body #email').val(email)
        modal.find('.modal-body #pnum').val(pnum)
    });