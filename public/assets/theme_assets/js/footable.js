$(function() {
    $('.retrait-table').footable({
      filtering: {
        enabled: true
      },
      "paging": {
              "enabled": true,
			  "current": 1
	  },
      strings: {
        enabled: false
      },
      "filtering": {
              "enabled": true
          },
      components: {
          filtering: FooTable.MyFiltering
      },
    }); 

  });
  $(function() {
    $('.depot-table').footable({
      filtering: {
        enabled: true
      },
      "paging": {
              "enabled": true,
			  "current": 1
	  },
      strings: {
        enabled: false
      },
      "filtering": {
              "enabled": true
          },
      components: {
          filtering: FooTable.MyFiltering.depot
      },
    }); 

  });

  $(function() {
    $('.logger-table').footable({
      filtering: {
        enabled: true
      },
      "paging": {
              "enabled": true,
			  "current": 1
	  },
      strings: {
        enabled: false
      },
      "filtering": {
              "enabled": true
          },
      components: {
          filtering: FooTable.MyFiltering.activitylogger
      },
    }); 

  });

  
FooTable.MyFiltering = FooTable.Filtering.extend({
	construct: function(instance){
		this._super(instance);
		
		// props for the first dropdown
		this.statuses = ['Web Developer','Senior Manager','UX/UI Desogner','Content Writer','Graphic Designer','Marketer','Project Manager','UI Designer','Business Development'];
		this.statusDefault = 'All';
		this.$status = null;
		// props for the second dropdown
		this.jobTitles = ['injustifié','justifiér'];
		this.jobTitleDefault = 'All';
		this.$jobTitle = null;
		
	},
	$create: function(){
		this._super();
		var self = this;

		// create the job title form group and dropdown
		var $job_title_form_grp = $('<div/>', {'class': 'form-group atbd-select d-flex align-items-center adv-table-searchs__status my-md-25 mt-15 mb-0 mr-sm-30 mr-0'})
			.append($('<label/>', {'class': 'd-flex align-items-center mb-sm-0 mb-2', text: 'Type solde'}))
			.prependTo(self.$form);

		self.$jobTitle = $('<select/>', { 'class': 'form-control ml-sm-10 ml-0' })
			.on('change', {self: self}, self._onJobTitleDropdownChanged)
			.append($('<option/>', {text: self.jobTitleDefault}))
			.appendTo($job_title_form_grp);

		$.each(self.jobTitles, function(i, jobTitle){
			self.$jobTitle.append($('<option/>').text(jobTitle));
		});
	},
	
	_onJobTitleDropdownChanged: function(e){
		var self = e.data.self,
			selected = $(this).val();
		if (selected !== self.jobTitleDefault){
			self.addFilter('status', selected, ['status']);
		} else {
			self.removeFilter('status');
		}
		self.filter();
	},
	draw: function(){
		this._super();
		
		// handle the jobTitle filter if one is supplied
		var jobTitle = this.find('status');
		if (jobTitle instanceof FooTable.Filter){
			this.$jobTitle.val(jobTitle.query.val());
		} else {
			this.$jobTitle.val(this.jobTitleDefault);
		}
	}
});


// depot table 

FooTable.MyFiltering.depot = FooTable.Filtering.extend({
	construct: function(instance){
		this._super(instance);
		
		
		// props for the second dropdown
		this.jobTitles = ['injustifié','justifiér'];
		this.jobTitleDefault = 'All';
		this.$jobTitle = null;
		
	},
	$create: function(){
		this._super();
		var self = this;



		// create the job title form group and dropdown
		var $job_title_form_grp = $('<div/>', {'class': 'form-group atbd-select d-flex align-items-center adv-table-searchs__status my-md-25 mt-15 mb-0 mr-sm-30 mr-0'})
			.append($('<label/>', {'class': 'd-flex align-items-center mb-sm-0 mb-2', text: 'Type solde'}))
			.prependTo(self.$form);

		self.$jobTitle = $('<select/>', { 'class': 'form-control ml-sm-10 ml-0' })
			.on('change', {self: self}, self._onJobTitleDropdownChanged)
			.append($('<option/>', {text: self.jobTitleDefault}))
			.appendTo($job_title_form_grp);

		$.each(self.jobTitles, function(i, jobTitle){
			self.$jobTitle.append($('<option/>').text(jobTitle));
		});
	},
	
	_onJobTitleDropdownChanged: function(e){
		var self = e.data.self,
			selected = $(this).val();
		if (selected !== self.jobTitleDefault){
			self.addFilter('status', selected, ['status']);
		} else {
			self.removeFilter('status');
		}
		self.filter();
	},
	draw: function(){
		this._super();
		

		// handle the jobTitle filter if one is supplied
		var jobTitle = this.find('status');
		if (jobTitle instanceof FooTable.Filter){
			this.$jobTitle.val(jobTitle.query.val());
		} else {
			this.$jobTitle.val(this.jobTitleDefault);
		}
	}
});


FooTable.MyFiltering.activitylogger = FooTable.Filtering.extend({
	construct: function(instance){
		this._super(instance);
		
		
		// props for the second dropdown
		this.jobTitles = ['ajouter','modifier','supprimer'];
		this.jobTitleDefault = 'All';
		this.$jobTitle = null;
		
	},
	$create: function(){
		this._super();
		var self = this;
		// create the job title form group and dropdown
		var $job_title_form_grp = $('<div/>', {'class': 'form-group atbd-select d-flex align-items-center adv-table-searchs__status my-md-25 mt-15 mb-0 mr-sm-30 mr-0'})
			.append($('<label/>', {'class': 'd-flex align-items-center mb-sm-0 mb-2', text: 'Type solde'}))
			.prependTo(self.$form);

		self.$jobTitle = $('<select/>', { 'class': 'form-control ml-sm-10 ml-0' })
			.on('change', {self: self}, self._onJobTitleDropdownChanged)
			.append($('<option/>', {text: self.jobTitleDefault}))
			.appendTo($job_title_form_grp);

		$.each(self.jobTitles, function(i, jobTitle){
			self.$jobTitle.append($('<option/>').text(jobTitle));
		});
	},
	
	_onJobTitleDropdownChanged: function(e){
		var self = e.data.self,
			selected = $(this).val();
		if (selected !== self.jobTitleDefault){
			self.addFilter('status', selected, ['status']);
		} else {
			self.removeFilter('status');
		}
		self.filter();
	},
	draw: function(){
		this._super();
		

		// handle the jobTitle filter if one is supplied
		var jobTitle = this.find('status');
		if (jobTitle instanceof FooTable.Filter){
			this.$jobTitle.val(jobTitle.query.val());
		} else {
			this.$jobTitle.val(this.jobTitleDefault);
		}
	}
});


FooTable.MyFiltering.rapportFournisseur = FooTable.Filtering.extend({
	construct: function(instance){
		this._super(instance);
		
		
		// props for the second dropdown
		this.jobTitles = ['ajouter','modifier','supprimer'];
		this.jobTitleDefault = 'All';
		this.$jobTitle = null;
		
	},
	$create: function(){
		this._super();
		var self = this;
		// create the job title form group and dropdown
		var $job_title_form_grp = $('<div/>', {'class': 'form-group atbd-select d-flex align-items-center adv-table-searchs__status my-md-25 mt-15 mb-0 mr-sm-30 mr-0'})
			.append($('<label/>', {'class': 'd-flex align-items-center mb-sm-0 mb-2', text: 'Type solde'}))
			.prependTo(self.$form);

		self.$jobTitle = $('<select/>', { 'class': 'form-control ml-sm-10 ml-0' })
			.on('change', {self: self}, self._onJobTitleDropdownChanged)
			.append($('<option/>', {text: self.jobTitleDefault}))
			.appendTo($job_title_form_grp);

		$.each(self.jobTitles, function(i, jobTitle){
			self.$jobTitle.append($('<option/>').text(jobTitle));
		});
	},
	
	_onJobTitleDropdownChanged: function(e){
		var self = e.data.self,
			selected = $(this).val();
		if (selected !== self.jobTitleDefault){
			self.addFilter('status', selected, ['status']);
		} else {
			self.removeFilter('status');
		}
		self.filter();
	},
	draw: function(){
		this._super();
		

		// handle the jobTitle filter if one is supplied
		var jobTitle = this.find('status');
		if (jobTitle instanceof FooTable.Filter){
			this.$jobTitle.val(jobTitle.query.val());
		} else {
			this.$jobTitle.val(this.jobTitleDefault);
		}
	}
});
