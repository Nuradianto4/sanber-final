		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
		    <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 95%;">
		        <div class="sidebar-scroll" style="overflow: hidden; width: auto; height: 95%;">
		            <nav>
		                <ul class="nav">
                            <li><a href="{{ route('dashboard') }}"><i class="lnr lnr-home"></i> <span>Home</span></a></li>
                            <li><a href="{{ route('ownquestion.index') }}"><i class="lnr lnr-list"></i> <span>Pertanyaan Anda</span></a></li>
                            <li><a href="{{ route('forum') }}"><i class="lnr lnr-user"></i> <span>Forum</span></a></li>
		                    {{-- <li><a href="{{ route('user.index') }}"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
		                    @if (Auth()->User()->role == 'patgtl')
		                        <a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-envelope"></i>
		                            <span>Surat</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
		                        <div id="subPages" class="collapse ">
		                            <ul class="nav">
		                                <li><a href="{{ route('skmh.index') }}" class="">Surat Keterangan Menerima Hibah</a>
		                                </li>
		                                <li><a href="{{ route('patgtl.bast') }}" class="">ESDM</a></li>
		                            </ul>
		                        </div>
		                    </li>
		                    @endif --}}
		                </ul>
		            </nav>
		        </div>
		        <div class="slimScrollBar"
		            style="background: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 761px;">
		        </div>
		        <div class="slimScrollRail"
		            style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;">
		        </div>
		    </div>
		</div>
		<!-- END LEFT SIDEBAR -->
