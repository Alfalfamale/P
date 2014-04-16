<?php  defined('C5_EXECUTE') or die(_("Access Denied."));
	class EzCtaBlockController extends BlockController {
		
		var $pobj;
		
		protected $btDescription = "Add a Call to Action Block";
		protected $btName = "EZ CTA";
		protected $btTable = 'btEzCta';
		protected $btInterfaceWidth = "370";
		protected $btInterfaceHeight = "350";
		
		function getFileID() {return $this->fID;}
		function getFileOnstateID() {return $this->fOnstateID;}
		function getFileOnstateObject() {
			if ($this->fOnstateID > 0) {
				return File::getByID($this->fOnstateID);
			}
		}
		function getFileObject() {
			return File::getByID($this->fID);
		}		
		function getAltText() {return $this->altText;}
		function getExternalLink() {return $this->externalLink;}
		
		public function save($args) {		
			$args['fOnstateID'] = ($args['fOnstateID'] != '') ? $args['fOnstateID'] : 0;
			$args['fID'] = ($args['fID'] != '') ? $args['fID'] : 0;
			$args['pageID'] = ($args['pageID'] != '') ? $args['pageID'] : 0;
			$args['maxWidth'] = (intval($args['maxWidth']) > 0) ? intval($args['maxWidth']) : 0;
			$args['maxHeight'] = (intval($args['maxHeight']) > 0) ? intval($args['maxHeight']) : 0;
			parent::save($args);
		}

		function getContentAndGenerate($align = false, $style = false, $id = null) {
			$db = Loader::db();
			$c = Page::getCurrentPage();
			$bID = $this->bID;
			
			$f = $this->getFileObject();
			$fullPath = $f->getPath();
			$relPath = $f->getRelativePath();			
			$size = @getimagesize($fullPath);
			
			if ($this->maxWidth > 0 || $this->maxHeight > 0) {
				$mw = $this->maxWidth > 0 ? $this->maxWidth : $size[0];
				$mh = $this->maxHeight > 0 ? $this->maxHeight : $size[1];
				$ih = Loader::helper('image');
				$thumb = $ih->getThumbnail($f, $mw, $mh);
				$sizeStr = ' width="' . $thumb->width . '" height="' . $thumb->height . '"';
				$relPath = $thumb->src;
			} else {
				$sizeStr = $size[3];
			}
			
			$img = "<img border=\"0\" class=\"ccm-image-block\" alt=\"{$this->altText}\" src=\"{$relPath}\" {$sizeStr} ";
			$img .= ($align) ? "align=\"{$align}\" " : '';
			
			$img .= ($style) ? "style=\"{$style}\" " : '';
			if($this->fOnstateID != 0) {
				$fos = $this->getFileOnstateObject();
				
				if ($this->maxWidth > 0 || $this->maxHeight > 0) {
					$thumbHover = $ih->getThumbnail($fos, $mw, $mh);				
					$relPathHover = $thumbHover->src;
				} else {
					$relPathHover = $fos->getRelativePath();
				}

				$img .= " onmouseover=\"this.src = '{$relPathHover}'\" ";
				$img .= " onmouseout=\"this.src = '{$relPath}'\" ";
			}
			
			$img .= ($id) ? "id=\"{$id}\" " : "";
			$img .= "/>";

			if($this->externalLink != ""){
				$img = "<a href=\"{$this->externalLink}\">" . $img ."</a>";
			}
			return $img;
		}
		
	}
	
?>