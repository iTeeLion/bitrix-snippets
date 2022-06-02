<?php

// Start bizproc
\CBPDocument::StartWorkflow($iblockId, ['lists', 'BizprocDocument', $docId], [], $arErrors);

// Validate bizproc start
\CBPDocument::StartWorkflowParametersValidate($templateId, $templateParameters, $documentType, $arErrors);

// Stop bizproc
\CBPDocument::killWorkflow($workflowId, $terminate, $documentId);

// Get states
\CBPDocument::GetDocumentStates($documentType, $documentId);

// Get template
\CBPDocument::getTemplatesForStart($userId, $documentType, $documentId, []);

// Can user operate doc
\CBPDocument::CanUserOperateDocument(\CBPCanUserOperateOperation::StartWorkflow, $userId, $documentId, []);
