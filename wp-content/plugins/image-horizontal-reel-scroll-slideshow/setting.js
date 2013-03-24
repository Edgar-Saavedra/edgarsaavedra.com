/**
 *     Image horizontal reel scroll slideshow
 *     Copyright (C) 2011 - 2013 www.gopiplus.com
 * 
 *     This program is free software: you can redistribute it and/or modify
 *     it under the terms of the GNU General Public License as published by
 *     the Free Software Foundation, either version 3 of the License, or
 *     (at your option) any later version.
 * 
 *     This program is distributed in the hope that it will be useful,
 *     but WITHOUT ANY WARRANTY; without even the implied warranty of
 *     MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *     GNU General Public License for more details.
 * 
 *     You should have received a copy of the GNU General Public License
 *     along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *	
 */

function Ihrss_submit()
{
	if(document.Ihrss_form.Ihrss_path.value=="")
	{
		alert("Please enter the image path.")
		document.Ihrss_form.Ihrss_path.focus();
		return false;
	}
	else if(document.Ihrss_form.Ihrss_link.value=="")
	{
		alert("Please enter the target link.")
		document.Ihrss_form.Ihrss_link.focus();
		return false;
	}
	else if(document.Ihrss_form.Ihrss_target.value=="")
	{
		alert("Please enter the target status.")
		document.Ihrss_form.Ihrss_target.focus();
		return false;
	}
	else if(document.Ihrss_form.Ihrss_title.value=="")
	{
		alert("Please enter the image alt text.")
		document.Ihrss_form.Ihrss_title.focus();
		return false;
	}
	else if(document.Ihrss_form.Ihrss_type.value=="")
	{
		alert("Please enter the gallery type.")
		document.Ihrss_form.Ihrss_type.focus();
		return false;
	}
	else if(document.Ihrss_form.Ihrss_status.value=="")
	{
		alert("Please select the display status.")
		document.Ihrss_form.Ihrss_status.focus();
		return false;
	}
	else if(document.Ihrss_form.Ihrss_order.value=="")
	{
		alert("Please enter the display order, only number.")
		document.Ihrss_form.Ihrss_order.focus();
		return false;
	}
	else if(isNaN(document.Ihrss_form.Ihrss_order.value))
	{
		alert("Please enter the display order, only number.")
		document.Ihrss_form.Ihrss_order.focus();
		return false;
	}
}

function Ihrss_delete(id)
{
	if(confirm("Do you want to delete this record?"))
	{
		document.frm_Ihrss_display.action="options-general.php?page=image-horizontal-reel-scroll-slideshow/image-management.php&AC=DEL&DID="+id;
		document.frm_Ihrss_display.submit();
	}
}	

function Ihrss_redirect()
{
	window.location = "options-general.php?page=image-horizontal-reel-scroll-slideshow/image-management.php";
}

function Ihrss_help()
{
	window.open("http://www.gopiplus.com/work/2011/05/08/wordpress-plugin-image-horizontal-reel-scroll-slideshow/");
}