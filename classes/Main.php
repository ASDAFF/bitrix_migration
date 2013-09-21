<?php

class Main
{
	public function checkCode($params)
	{
		global $APPLICATION;

		if (isset($params['CODE']) && $params['CODE'] !== '') {
			CModule::IncludeModule('iblock');

			$iblocks = CIBlock::GetList();
			while ($iblock = $iblocks->Fetch()) {
				if ($iblock['CODE'] === $params['CODE']) {
					$APPLICATION->ThrowException(new CApplicationException('Инфоблок с таким CODE уже существует.'));

					return false;
				}
			}
		}
	}
}